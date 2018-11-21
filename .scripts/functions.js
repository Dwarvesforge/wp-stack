const docblockParser = require('coffeekraken-docblock-parser')
const glob = require('glob-all')
const path = require('path')
const fs = require('fs')
const rimraf = require('rimraf')

// delete the functions folder
rimraf.sync('doc/functions')
// create the functions folder empty
fs.mkdir('doc/functions')

const docblockParserInstance = docblockParser({
	language : 'php'
})

// loop on each functions folders
const folders = glob.sync('src/functions/*');
folders.forEach((folder) => {

	if ( ! fs.statSync(folder).isDirectory()) return;

	const mds = []

	mds.push(`# ${path.basename(folder)}`)
	mds.push('');

	// parse all files in the folder
	const files = glob.sync(`${folder}/*`);

	// loop on each files
	files.forEach((file) => {
		const name = 'WPS::' + path.basename(file).replace('.php','')
		mds.push(`- [${name}](#${name.replace('::','_')})`)
	})

	// loop on each files
	files.forEach((file) => {

		// read content
		const content = fs.readFileSync(file, 'utf8')

		// parse docblocks into the content
		const docblocks = docblockParserInstance.parse(content)

		// loop on each docblocks
		docblocks.forEach((docblock) => {

			const name = 'WPS::' + docblock.name

			// generate the markdown code to add to the file
			mds.push(`<a name="${name.replace('::','_')}"></a>`)
			mds.push(`## ${name}`)
			mds.push(docblock.body)
			if (docblock.example) {
				mds.push(`\`\`\`${docblock.example.language}`)
				mds.push(docblock.example.body)
				mds.push("```")
			}
			mds.push('');
			mds.push(`[Full documentation](/doc/${file.replace('.php','.md')})`)
			if (docblock.see) {
				mds.push('');
				mds.push(`[${docblock.see.label}](${docblock.see.url})`);
			}
			mds.push('');

		})

	})

	// create file
	fs.writeFileSync(`doc/functions/${path.basename(folder)}.md`, mds.join("\n"))

})
