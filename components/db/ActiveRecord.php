<?php
namespace app\components\db;

class ActiveRecord extends \yii\db\ActiveRecord
{
	public $setAttributesAll = [];

	/**
     * 自动更新created_at和updated_at时间
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
            ],
        ];
    }

	public function saveAll()
	{
		foreach ($this->setAttributesAll as $key => $value) {
			$this->isNewRecord = true;
			$this->setAttributes($value);
			if (!$this->save()) {
				return array_values($this->getFirstErrors())[0];
			}
			$this->id = null;
		}
		return true;
	}
}