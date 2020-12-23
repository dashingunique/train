<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class EmployeePermissionMenu extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'employee_permission_menu';
    
}
