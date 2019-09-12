<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Bad;

/*
 * Already it’s plainly obvious that this class has more than one responsibility. Just looking at the
 * method name of generateAndSendInvoices() reveals two. It’s not always readily apparent from
 * class and method names how many responsibilities there are, though. Sometimes it requires
 * looking at the actual code within those methods. After all, the method could have simply been
 * named generateInvoices() , hiding the fact that it was also responsible for delivering those
 * invoices.
 *
 * There are at least four separate responsibilities of this class:
    1.Figuring out which invoices to create
    2.Generating invoice records in the database
    3.Generating the physical representation of the invoice (i.e.: PDF, Excel, CSV, etc)
    4.Sending the invoice to the customer via some means
 */
class InvoicingService
{
    public function generateAndSendInvoices()
    {
    }

    protected function generateInvoice($customer)
    {
    }

    protected function createInvoiceFile($invoice)
    {
    }

    protected function sendInvoice($invoice)
    {
    }
}
