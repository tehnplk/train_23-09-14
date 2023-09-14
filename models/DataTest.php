<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_test".
 *
 * @property int $id ลำดับนิเทศ
 * @property string $vstdate วันที่บันทึกข้อมูล
 * @property string $data_test1 1. อัตรากำลังและการมอบหมายงาน
 * @property string|null $note1 รายละเอียด(n)(1)
 * @property string|null $note1_1 การแก้ไขเบื้องต้น(n)(1)
 * @property string|null $note1_2 ฝ่ายพิจารณา(n)(1)
 * @property string $data_test2 2. สมรรถนะ ทักษะวิชาชีพ
 * @property string|null $note2 รายละเอียด(n)(2)
 * @property string|null $note2_1 การแก้ไขเบื้องต้น(n)(2)
 * @property string|null $note2_2 ฝ่ายพิจารณา(n)(2)
 * @property string $data_test3 3. บุคลิกภาพ พฤติกรรมบริการ และจริยธรรมวิชาชีพ
 * @property string|null $note3 รายละเอียด(n)(3)
 * @property string|null $note3_1 การแก้ไขเบื้องต้น(n)(3)
 * @property string|null $note3_2 ฝ่ายพิจารณา(n)(3)
 * @property string $data_test4 4. สิ่งแวดล้อม อาคารสถานที่และความปลอดภัย
 * @property string|null $note4 รายละเอียด(n)(4)
 * @property string|null $note4_1 การแก้ไขเบื้องต้น(n)(4)
 * @property string|null $note4_2 ฝ่ายพิจารณา(n)(4)
 * @property string $data_test5 5. เครื่องมือ อุปกรณ์เครื่องใช้และเวชภัณฑ์
 * @property string|null $note5 รายละเอียด(n)(5)
 * @property string|null $note5_1 การแก้ไขเบื้องต้น(n)(5)
 * @property string|null $note5_2 ฝ่ายพิจารณา(n)(5)
 * @property string $data_test6 6. กระบวนการดูแลผู้ป่วยตาม CPG/CNPG
 * @property string|null $note6 รายละเอียด(n)(6)
 * @property string|null $note6_1 การแก้ไขเบื้องต้น(n)(6)
 * @property string|null $note6_2 ฝ่ายพิจารณา(n)(6)
 * @property string $data_test7 7. การใช้กระบวนการพยาบาลในการปฏิบัติการพยาบาลตั้งแต่รับใหม่จนจำหน่าย
 * @property string|null $note7 รายละเอียด(n)(7)
 * @property string|null $note7_1 การแก้ไขเบื้องต้น(n)(7)
 * @property string|null $note7_2 ฝ่ายพิจารณา(n)(7)
 * @property string $data_test8 8. ระบบริหารความเสี่ยง A. Specific Clinical Risk  B. Common Risk
 * @property string|null $note8 รายละเอียด(n)(8)
 * @property string|null $note8_1 การแก้ไขเบื้องต้น(n)(8)
 * @property string|null $note8_2 ฝ่ายพิจารณา(n)(8)
 * @property string $data_test9 9. ระบบควบคุมและป้องกันการแพร่กระจายเชื้อ
 * @property string|null $note9 รายละเอียด(n)(9)
 * @property string|null $note9_1 การแก้ไขเบื้องต้น(n)(9)
 * @property string|null $note9_2 ฝ่ายพิจารณา(n)(9)
 * @property string $data_test10 10. ระบบยา
 * @property string|null $note10 รายละเอียด(n)(10)
 * @property string|null $note10_1 การแก้ไขเบื้องต้น(n)(10)
 * @property string|null $note10_2 ฝ่ายพิจารณา(n)(10)
 * @property string $data_test11 11. การสอนและแนะนำผู้ป่วย
 * @property string|null $note11 รายละเอียด(n)(11)
 * @property string|null $note11_1 การแก้ไขเบื้องต้น(n)(11)
 * @property string|null $note11_2 ฝ่ายพิจารณา(n)(11)
 * @property string $data_test12 12. การพิทักษ์สิทธิ
 * @property string|null $note12 รายละเอียด(n)(12)
 * @property string|null $note12_1 การแก้ไขเบื้องต้น(n)(12)
 * @property string|null $note12_2 ฝ่ายพิจารณา(n)(12)
 * @property string|null $note หมายเหตุ
 * @property string|null $checkuser_id ผู้ลงข้อมูล
 *
 * @property UserGroup $checkuser
 */
class DataTest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vstdate', 'data_test1', 'data_test2', 'data_test3', 'data_test4', 'data_test5', 'data_test6', 'data_test7', 'data_test8', 'data_test9', 'data_test10', 'data_test11', 'data_test12'], 'required'],
            [['vstdate'], 'safe'],
            [['data_test1', 'data_test2', 'data_test3', 'data_test4', 'data_test5', 'data_test6', 'data_test7', 'data_test8', 'data_test9', 'data_test10', 'data_test11', 'data_test12'], 'string'],
            [['note1', 'note1_1', 'note1_2', 'note2', 'note2_1', 'note2_2', 'note3', 'note3_1', 'note3_2', 'note4', 'note4_1', 'note4_2', 'note5', 'note5_1', 'note5_2', 'note6', 'note6_1', 'note6_2', 'note7', 'note7_1', 'note7_2', 'note8', 'note8_1', 'note8_2', 'note9', 'note9_1', 'note9_2', 'note10', 'note10_1', 'note10_2', 'note11', 'note11_1', 'note11_2', 'note12', 'note12_1', 'note12_2', 'note'], 'string', 'max' => 255],
            [['checkuser_id'], 'string', 'max' => 100],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vstdate' => 'วันที่',
            'data_test1' => '1.อัตรากำลังและการมอบหมายงาน',
            'note1' => 'รายละเอียด',
            'note1_1' => 'Note1 1',
            'note1_2' => 'Note1 2',
            'data_test2' => '2.สมรรถนะ ทักษะวิชาชีพ',
            'note2' => 'รายละเอียด',
            'note2_1' => 'Note2 1',
            'note2_2' => 'Note2 2',
            'data_test3' => 'Data Test3',
            'note3' => 'Note3',
            'note3_1' => 'Note3 1',
            'note3_2' => 'Note3 2',
            'data_test4' => 'Data Test4',
            'note4' => 'Note4',
            'note4_1' => 'Note4 1',
            'note4_2' => 'Note4 2',
            'data_test5' => 'Data Test5',
            'note5' => 'Note5',
            'note5_1' => 'Note5 1',
            'note5_2' => 'Note5 2',
            'data_test6' => 'Data Test6',
            'note6' => 'Note6',
            'note6_1' => 'Note6 1',
            'note6_2' => 'Note6 2',
            'data_test7' => 'Data Test7',
            'note7' => 'Note7',
            'note7_1' => 'Note7 1',
            'note7_2' => 'Note7 2',
            'data_test8' => 'Data Test8',
            'note8' => 'Note8',
            'note8_1' => 'Note8 1',
            'note8_2' => 'Note8 2',
            'data_test9' => 'Data Test9',
            'note9' => 'Note9',
            'note9_1' => 'Note9 1',
            'note9_2' => 'Note9 2',
            'data_test10' => 'Data Test10',
            'note10' => 'Note10',
            'note10_1' => 'Note10 1',
            'note10_2' => 'Note10 2',
            'data_test11' => 'Data Test11',
            'note11' => 'Note11',
            'note11_1' => 'Note11 1',
            'note11_2' => 'Note11 2',
            'data_test12' => 'Data Test12',
            'note12' => 'Note12',
            'note12_1' => 'Note12 1',
            'note12_2' => 'Note12 2',
            'note' => 'Note',
            'checkuser_id' => 'Checkuser ID',
        ];
    }
    
    

    /**
     * Gets query for [[Checkuser]].
     *
     * @return \yii\db\ActiveQuery
     */
   
}
