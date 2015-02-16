<?php

/**
 * This is the model base class for the table "m_rounding".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MRounding".
 *
 * Columns in table "m_rounding" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $limit
 * @property integer $ap_account_id
 * @property integer $ar_account_id
 *
 */
abstract class BaseMRounding extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'm_rounding';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'MRounding|MRoundings', $n);
	}

	public static function representingColumn() {
		return 'code';
	}

	public function rules() {
		return array(
			array('code, name, limit, ap_account_id, ar_account_id', 'required'),
			array('ap_account_id, ar_account_id', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>5),
			array('name', 'length', 'max'=>50),
			array('limit', 'length', 'max'=>20),
			array('id, code, name, limit, ap_account_id, ar_account_id', 'safe', 'on'=>'search'),
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
			'name' => Yii::t('app', 'Name'),
			'limit' => Yii::t('app', 'Limit'),
			'ap_account_id' => Yii::t('app', 'Ap Account'),
			'ar_account_id' => Yii::t('app', 'Ar Account'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('limit', $this->limit, true);
		$criteria->compare('ap_account_id', $this->ap_account_id);
		$criteria->compare('ar_account_id', $this->ar_account_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}