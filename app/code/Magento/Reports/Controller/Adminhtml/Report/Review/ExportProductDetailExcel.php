<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Reports\Controller\Adminhtml\Report\Review;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Filesystem\DirectoryList;

/**
 * Class \Magento\Reports\Controller\Adminhtml\Report\Review\ExportProductDetailExcel
 *
 */
class ExportProductDetailExcel extends \Magento\Reports\Controller\Adminhtml\Report\Review
{
    /**
     * Export review product detail report to ExcelXML format
     *
     * @return ResponseInterface
     */
    public function execute()
    {
        $fileName = 'review_product_detail.xml';
        $content = $this->_view->getLayout()->createBlock(
            \Magento\Reports\Block\Adminhtml\Review\Detail\Grid::class
        )->getExcel(
            $fileName
        );

        return $this->_fileFactory->create($fileName, $content, DirectoryList::VAR_DIR);
    }
}
