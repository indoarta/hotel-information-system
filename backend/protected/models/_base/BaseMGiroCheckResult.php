<?php

/**
 * This is the model base class for the table "m_giro_check_result".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MGiroCheckResult".
 *
 * Columns in table "m_giro_check_result" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $no_giro_check
 * @property string $bank
 * @property string $amount
 * @property string $allocation
 * @property string $leftover
 *
 */
abstract class BaseMGiroCheckResult extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'm_giro_check_result';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'MGiroCheckResult|MGiroCheckResults', $n);
	}

	public static function representingColumn() {
		return 'no_giro_check';
	}

	public function rules() {
		return array(
			array('no_giro_check, bank, amount, allocation, leftover', 'required'),
			array('no_giro_check', 'length', 'max'=>10),
			array('bank, amount, allocation, leftover', 'length', 'max'=>20),
			array('id, no_giro_check, bank, amount, allocation, leftover', 'safe', 'on'=>'search'),
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
			'no_giro_check' => Yii::t('app', 'No Giro Check'),
			'bank' => Yii::t('app', 'Bank'),
			'amount' => Yii::t('app', 'Amount'),
			'allocation' => Yii::t('app', 'Allocation'),
			'leftover' => Yii::t('app', 'Leftover'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('no_giro_check', $this->no_giro_check, true);
		$criteria->compare('bank', $this->bank, true);
		$criteria->compare('amount', $this->amount, true);
		$criteria->compare('allocation', $this->allocation, true);
		$criteria->compare('leftover', $this->leftover, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}