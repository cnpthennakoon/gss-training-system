@include('_includes.form._text', ['name' => 'name', 'title' => 'Name'])
@include('_includes.form._text', ['name' => 'slug', 'title' => 'Slug'])
@include('_includes.form._select', ['name' => 'global_project_id', 'title' => 'Global Project', 'list' => $globalProjectsList])
@include('_includes.form._select', ['name' => 'country_id', 'title' => 'Country', 'list' => $countriesList])
@include('_includes.form._select', ['name' => 'region_id', 'title' => 'Region', 'list' => $regionsList])
@include('_includes.form._select', ['name' => 'manufacturer_id', 'title' => 'Manufacturer', 'list' => $manufacturersList])
@include('_includes.form._save')
