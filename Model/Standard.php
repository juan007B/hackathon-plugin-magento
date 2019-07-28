<?php
/**
 * PlacetoPay Connector for Magento 2
 *
 * @category   EGM
 * @package    EGM_PlacetoPay
 * @copyright  Copyright (c) 2009-2010 EGM Ingenieria sin fronteras S.A.S.
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @version    $Id: Standard.php,v 1.0.17 2010-10-02 17:28:00-05 egarcia Exp $
 */
/**
 * Procesa las peticiones de PlacetoPay, generando las tramas e interpretandolas
 *
 * @category   EGM
 * @package    EGM_PlacetoPay
 * @author     Place to Pay. <desarrollo@placetopay.com>
 * @since      martes, 17 de noviembre de 2009
 */
class EGM_PlacetoPay_Model_Standard extends EGM_PlacetoPay_Model_Abstract
{
    /**
     * unique internal payment method identifier
     */
    protected $_code = 'placetopay_standard';
    public function isDefault()
    {
        return true;
    }
}
