<?php

/**
 * This is the model base class for the table "m_raw_material".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MRawMaterial".
 *
 * Columns in table "m_raw_material" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $code
 * @property string $description
 * @property integer $unit_id
 * @property integer $unit_convert_id
 * @property integer $account_id
 *
 */
abstract class BaseMRawMaterial extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'm_raw_material';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'MRawMaterial|MRawMaterials', $n);
	}

	public static function representingColumn() {
		return 'code';
	}

	public function rules() {
		return array(
			array('code, description, unit_id, unit_convert_id, account_id', 'required'),
			array('unit_id, unit_convert_id, account_id', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>3),
			array('description', 'length', 'max'=>50),
			array('id, code, description, unit_id, unit_convert_id, account_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'code' => Yii::t('app', 'Code'),
			'description' => Yii::t('app', 'Description'),
			'unit_id' => Yii::t('app', 'Unit'),
			'unit_convert_id' => Yii::t('app', 'Unit Convert'),
			'account_id' => Yii::t('app', 'Account'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('unit_id', $this->unit_id);
		$criteria->compare('unit_convert_id', $this->unit_convert_id);
		$criteria->compare('account_id', $this->account_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}