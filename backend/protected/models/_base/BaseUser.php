<?php

/**
 * This is the model base class for the table "user".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "User".
 *
 * Columns in table "user" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property integer $level_id
 * @property string $last_login
 * @property string $last_logout
 *
 */
abstract class BaseUser extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'user';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'User|Users', $n);
	}

	public static function representingColumn() {
		return 'username';
	}

	public function rules() {
		return array(
			array('username, password, name, level_id, last_login, last_logout', 'required'),
			array('level_id', 'numerical', 'integerOnly'=>true),
			array('username, password, name', 'length', 'max'=>50),
			array('id, username, password, name, level_id, last_login, last_logout', 'safe', 'on'=>'search'),
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
			'username' => Yii::t('app', 'Username'),
			'password' => Yii::t('app', 'Password'),
			'name' => Yii::t('app', 'Name'),
			'level_id' => Yii::t('app', 'Level'),
			'last_login' => Yii::t('app', 'Last Login'),
			'last_logout' => Yii::t('app', 'Last Logout'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('level_id', $this->level_id);
		$criteria->compare('last_login', $this->last_login, true);
		$criteria->compare('last_logout', $this->last_logout, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}