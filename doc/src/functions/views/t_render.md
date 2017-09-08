# t_render

Render a view with the data passed to it and return it



Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ String }**  |  The view slug to render relative to the S_VIEW_PATH constant config  |  required  |
$data  |  **{ Array }**  |  The data array to pass as extracted variables to the view  |  optional  |  null

Return **{ String }** The rendered view