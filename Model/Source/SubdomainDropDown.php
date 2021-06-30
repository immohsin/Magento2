<?php

namespace immohsin\magento2\Model\Source;

class SubdomainDropDown implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => "pharmacy", 'label' => __('pharmacy')], ['value' => "grocery", 'label' => __('grocery')]];
    }
}
