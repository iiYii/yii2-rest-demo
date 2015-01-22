<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_meta".
 *
 * @property integer $id
 * @property string $user_id
 * @property string $type
 * @property string $value
 * @property string $target_id
 * @property string $target_type
 * @property string $created_at
 */
class UserMeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_meta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'target_id', 'created_at'], 'integer'],
            [['type', 'target_type'], 'string', 'max' => 100],
            [['value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'type' => '操作类型',
            'value' => '操作类型值',
            'target_id' => '目标id',
            'target_type' => '目标类型',
            'created_at' => '创建时间',
        ];
    }
}
