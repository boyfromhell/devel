<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'team_create',
            ],
            [
                'id'    => 19,
                'title' => 'team_edit',
            ],
            [
                'id'    => 20,
                'title' => 'team_show',
            ],
            [
                'id'    => 21,
                'title' => 'team_delete',
            ],
            [
                'id'    => 22,
                'title' => 'team_access',
            ],
            [
                'id'    => 23,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 25,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 26,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 27,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 28,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 29,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 30,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 31,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 32,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 33,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 34,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 35,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 36,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 37,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 38,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_create',
            ],
            [
                'id'    => 40,
                'title' => 'task_edit',
            ],
            [
                'id'    => 41,
                'title' => 'task_show',
            ],
            [
                'id'    => 42,
                'title' => 'task_delete',
            ],
            [
                'id'    => 43,
                'title' => 'task_access',
            ],
            [
                'id'    => 44,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 45,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 46,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 47,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 48,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 49,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 50,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 51,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 52,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 53,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 54,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 55,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 56,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 57,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 58,
                'title' => 'product_create',
            ],
            [
                'id'    => 59,
                'title' => 'product_edit',
            ],
            [
                'id'    => 60,
                'title' => 'product_show',
            ],
            [
                'id'    => 61,
                'title' => 'product_delete',
            ],
            [
                'id'    => 62,
                'title' => 'product_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
