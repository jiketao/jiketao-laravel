<?php

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'shoujitongxun' => [
              'display_name' => '手机通讯',
              'sub' => [
                  ['zhinengshouji', '智能手机'],
                  ['feizhinengshouji', '非智能手机'],
                  ['duijiangji', '对讲机'],
                  ['lanyaerji', '蓝牙耳机']
              ]
            ],
            'sheyingshexiang' => [
                'display_name' => '摄影摄像',
                'sub' => [
                    ['danfangjisheng', '单反机身'],
                    ['weidanxiangji', '微单相机'],
                    ['shumaxiangji', '数码相机'],
                    ['jiayongshexiangji', '家用摄像机'],
                    ['zhuanyeshexiangji', '专业摄像机']
                ]
            ],
            'xiangjipeijian'  => [
                'display_name' => '相机配件',
                'sub' => [
                    ['shumapeijian', '数码配件'],
                    ['chongdianqi', '充电器'],
                    ['dianchi', '电池'],
                    ['diannaozhijia', '电脑支架'],
                    ['yidongdianyuan', '移动电源'],
                    ['chukongbi', '触控笔'],
                    ['qitashumapeijian', '其它数码配件']
                ]
            ]
        ];

        foreach($categories as $name => $category) {
            $parent = Categories::create([
                'slug'           =>  $name,
                'name'   =>  $category['display_name'],
                'parent_id'      =>  -1
            ]);

            $subs = $category['sub'];

            foreach($subs as $sub_category) {
                Categories::create([
                    'slug'         => $sub_category[0],
                    'name' => $sub_category[1],
                    'parent_id'    => $parent->id
                ]);
            }
        }
    }
}
