<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.5                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Core/OptionValue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_OptionValue extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_option_value';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   * Option ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Group which this option belongs to.
   *
   * @var int unsigned
   */
  public $option_group_id;
  /**
   * Option string as displayed to users - e.g. the label in an HTML OPTION tag.
   *
   * @var string
   */
  public $label;
  /**
   * The actual value stored (as a foreign key) in the data record. Functions which need lookup option_value.title should use civicrm_option_value.option_group_id plus civicrm_option_value.value as the key.
   *
   * @var string
   */
  public $value;
  /**
   * Stores a fixed (non-translated) name for this option value. Lookup functions should use the name as the key for the option value row.
   *
   * @var string
   */
  public $name;
  /**
   * Use to sort and/or set display properties for sub-set(s) of options within an option group. EXAMPLE: Use for college_interest field, to differentiate partners from non-partners.
   *
   * @var string
   */
  public $grouping;
  /**
   * Bitwise logic can be used to create subsets of options within an option_group for different uses.
   *
   * @var int unsigned
   */
  public $filter;
  /**
   * Is this the default option for the group?
   *
   * @var boolean
   */
  public $is_default;
  /**
   * Controls display sort order.
   *
   * @var int unsigned
   */
  public $weight;
  /**
   * Optional description.
   *
   * @var text
   */
  public $description;
  /**
   * Is this row simply a display header? Expected usage is to render these as OPTGROUP tags within a SELECT field list of options?
   *
   * @var boolean
   */
  public $is_optgroup;
  /**
   * Is this a predefined system object?
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * Is this option active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Component that this option value belongs/caters to.
   *
   * @var int unsigned
   */
  public $component_id;
  /**
   * Which Domain is this option value for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   *
   * @var int unsigned
   */
  public $visibility_id;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_option_value
   */
  function __construct()
  {
    $this->__table = 'civicrm_option_value';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_Reference_Interface
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'option_group_id', 'civicrm_option_group', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'component_id', 'civicrm_component', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Value ID') ,
          'required' => true,
        ) ,
        'option_group_id' => array(
          'name' => 'option_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Group ID') ,
          'required' => true,
          'FKClassName' => 'CRM_Core_DAO_OptionGroup',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_option_group',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Label') ,
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'value' => array(
          'name' => 'value',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Value') ,
          'required' => true,
          'maxlength' => 512,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Name') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_option_value.name',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'grouping' => array(
          'name' => 'grouping',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Grouping Name') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'filter' => array(
          'name' => 'filter',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Filter') ,
        ) ,
        'is_default' => array(
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option is Default?') ,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Weight') ,
          'required' => true,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Option Description') ,
          'rows' => 8,
          'cols' => 60,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'is_optgroup' => array(
          'name' => 'is_optgroup',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option is Header?') ,
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option Is Reserved?') ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option Is Active') ,
          'default' => '1',
        ) ,
        'component_id' => array(
          'name' => 'component_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Component') ,
          'FKClassName' => 'CRM_Core_DAO_Component',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_component',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Domain') ,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'visibility_id' => array(
          'name' => 'visibility_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Visibility') ,
          'default' => 'NULL',
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'option_group_id' => 'option_group_id',
        'label' => 'label',
        'value' => 'value',
        'name' => 'name',
        'grouping' => 'grouping',
        'filter' => 'filter',
        'is_default' => 'is_default',
        'weight' => 'weight',
        'description' => 'description',
        'is_optgroup' => 'is_optgroup',
        'is_reserved' => 'is_reserved',
        'is_active' => 'is_active',
        'component_id' => 'component_id',
        'domain_id' => 'domain_id',
        'visibility_id' => 'visibility_id',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['option_value'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['option_value'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
