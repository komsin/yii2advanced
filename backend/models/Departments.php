<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property integer $department_id
 * @property integer $branches_branch_id
 * @property string $department_name
 * @property integer $companies_company_id
 * @property string $department_created_date
 * @property string $department_status
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branches_branch_id', 'department_name', 'companies_company_id', 'department_created_date', 'department_status'], 'required'],
            [['branches_branch_id', 'companies_company_id'], 'integer'],
            [['department_created_date'], 'safe'],
            [['department_status'], 'string'],
            [['department_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'branches_branch_id' => 'Branches Branch ID',
            'department_name' => 'Department Name',
            'companies_company_id' => 'Companies Company ID',
            'department_created_date' => 'Department Created Date',
            'department_status' => 'Department Status',
        ];
    }
}