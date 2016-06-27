<?php

namespace qwertyrrr\callback\models;

use Yii;
use qwertyrrr\callback\Module;
/**
 * This is the model class for table "callback".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $message
 * @property string $time
 * @property string $createdAt
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'callback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $module = Module::getInstance();
        return [
            [['name', 'phone', 'message', 'time'], 'required','message'=>$module->requireMessage],
            [['createdAt'], 'safe'],
            [['name', 'phone'], 'string', 'max' => 50],
            [['message'], 'string', 'max' => 255],
            [['time'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        $module = Module::getInstance();
        return [
            'id' => 'ID',
            'name' => $module->nameTitle,
            'phone' => $module->phoneTitle,
            'message' => $module->messageTitle,
            'time' => $module->timeTitle,
            'createdAt' => 'Created At',
        ];
    }

    public function beforeSave($insert)
    {
        if($this->isNewRecord) {
            $this->createdAt = Date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }
}
