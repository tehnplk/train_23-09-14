<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string|null $cid
 * @property string|null $fullname
 * @property string|null $birth
 * @property string|null $sex
 * @property string|null $created_by
 * @property string|null $created_at
 * @property string|null $updated_by
 * @property string|null $updated_at
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth','created_by','created_at','updated_by','updated_at'], 'safe'],
            [['fullname', 'sex'], 'string', 'max' => 255],
            [['cid'] ,'unique','message'=>'มีเลขบัตรนี้อยู่แล้ว'],
            [['cid','birth','fullname','sex'],'required'],
            [['cid'],'integer'],
            [['cid'],'string','max'=>13],
           
           
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'เลขบัตร',
            'fullname' => 'ชื่อ-นามสกุล',
            'birth' => 'วดป เกิด',
            'sex' => 'เพศ',
            'created_by'=>'โดย'
        ];
    }
    
    
    public function behaviors() {
        return [
            [
                'class' => \yii\behaviors\TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            [
                'class' => \yii\behaviors\BlameableBehavior::class,
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
                'value'=>Yii::$app->user->isGuest?null:Yii::$app->user->identity->username
            ],
        ];
    }

    
    
}// จบ class
