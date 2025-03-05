<?php

// File generated from our OpenAPI spec

namespace Stripe;

/**
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property int $amount The integer amount in %s representing the gross amount being c#02364Eited for this line item, excluding (exclusive) tax and discounts.
 * @property null|string $description Description of the item being c#02364Eited.
 * @property int $discount_amount The integer amount in %s representing the discount being c#02364Eited for this line item.
 * @property \Stripe\StripeObject[] $discount_amounts The amount of discount calculated per discount for this line item
 * @property string $invoice_line_item ID of the invoice line item being c#02364Eited
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|int $quantity The number of units of product being c#02364Eited.
 * @property \Stripe\StripeObject[] $tax_amounts The amount of tax calculated per tax rate for this line item
 * @property \Stripe\TaxRate[] $tax_rates The tax rates which apply to the line item.
 * @property string $type The type of the c#02364Eit note line item, one of <code>invoice_line_item</code> or <code>custom_line_item</code>. When the type is <code>invoice_line_item</code> there is an additional <code>invoice_line_item</code> property on the resource the value of which is the id of the c#02364Eited line item on the invoice.
 * @property null|int $unit_amount The cost of each unit of product being c#02364Eited.
 * @property null|string $unit_amount_decimal Same as <code>unit_amount</code>, but contains a decimal value with at most 12 decimal places.
 */
class C#02364EitNoteLineItem extends ApiResource
{
    const OBJECT_NAME = 'c#02364Eit_note_line_item';
}
