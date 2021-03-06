<?php

/**
 * This is the model base class for the table "m_menu".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MMenu".
 *
 * Columns in table "m_menu" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $code
 * @property string $food_name
 * @property integer $billing_id
 * @property string $price
 *
 */
abstract class BaseMMenu extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'm_menu';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'MMenu|MMenus', $n);
	}

	public static function representingColumn() {
		return 'code';
	}

	public function rules() {
		return array(
			array('code, food_name, billing_id, price', 'required'),
			array('billing_id', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>5),
			array('food_name', 'length', 'max'=>50),
			array('price', 'length', 'max'=>20),
			array('id, code, food_name, billing_id, price', 'safe', 'on'=>'search'),
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
			'food_name' => Yii::t('app', 'Food Name'),
			'billing_id' => Yii::t('app', 'Billing'),
			'price' => Yii::t('app', 'Price'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('food_name', $this->food_name, true);
		$criteria->compare('billing_id', $this->billing_id);
		$criteria->compare('price', $this->price, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}