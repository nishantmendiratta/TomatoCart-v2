<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * TomatoCart
 *
 * An open source application ecommerce framework
 *
 * @package   TomatoCart
 * @author    TomatoCart Dev Team
 * @copyright Copyright (c) 2011, TomatoCart, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html
 * @link    http://tomatocart.com
 * @since   Version 0.5
 * @filesource
 */

  class TOC_Access_Customers extends TOC_Access {
    public function __construct()
    {
      parent::__construct();
      
      $this->_module = 'customers';
      $this->_group = 'customers';
      $this->_icon = 'personal.png';
      $this->_sort_order = 200;
      
      $this->_title = lang('access_customers_title');
    }
  }
  
/* End of file customers.php */
/* Location: ./system/modules/access/customers.php */