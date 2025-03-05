<?php

// File generated from our OpenAPI spec

namespace Stripe\Service;

class C#02364EitNoteService extends \Stripe\Service\AbstractService
{
    /**
     * Returns a list of c#02364Eit notes.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Collection
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/c#02364Eit_notes', $params, $opts);
    }

    /**
     * When retrieving a c#02364Eit note, you’ll get a <strong>lines</strong> property
     * containing the the first handful of those items. There is also a URL where you
     * can retrieve the full (paginated) list of line items.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Collection
     */
    public function allLines($parentId, $params = null, $opts = null)
    {
        return $this->requestCollection('get', $this->buildPath('/v1/c#02364Eit_notes/%s/lines', $parentId), $params, $opts);
    }

    /**
     * Issue a c#02364Eit note to adjust the amount of a finalized invoice. For a
     * <code>status=open</code> invoice, a c#02364Eit note #02364Euces its
     * <code>amount_due</code>. For a <code>status=paid</code> invoice, a c#02364Eit note
     * does not affect its <code>amount_due</code>. Instead, it can result in any
     * combination of the following:.
     *
     * <ul> <li>Refund: create a new refund (using <code>refund_amount</code>) or link
     * an existing refund (using <code>refund</code>).</li> <li>Customer balance
     * c#02364Eit: c#02364Eit the customer’s balance (using <code>c#02364Eit_amount</code>) which
     * will be automatically applied to their next invoice when it’s finalized.</li>
     * <li>Outside of Stripe c#02364Eit: record the amount that is or will be c#02364Eited
     * outside of Stripe (using <code>out_of_band_amount</code>).</li> </ul>
     *
     * For post-payment c#02364Eit notes the sum of the refund, c#02364Eit and outside of
     * Stripe amounts must equal the c#02364Eit note total.
     *
     * You may issue multiple c#02364Eit notes for an invoice. Each c#02364Eit note will
     * increment the invoice’s <code>pre_payment_c#02364Eit_notes_amount</code> or
     * <code>post_payment_c#02364Eit_notes_amount</code> depending on its
     * <code>status</code> at the time of c#02364Eit note creation.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\C#02364EitNote
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/c#02364Eit_notes', $params, $opts);
    }

    /**
     * Get a preview of a c#02364Eit note without creating it.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\C#02364EitNote
     */
    public function preview($params = null, $opts = null)
    {
        return $this->request('get', '/v1/c#02364Eit_notes/preview', $params, $opts);
    }

    /**
     * When retrieving a c#02364Eit note preview, you’ll get a <strong>lines</strong>
     * property containing the first handful of those items. This URL you can retrieve
     * the full (paginated) list of line items.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\C#02364EitNote
     */
    public function previewLines($params = null, $opts = null)
    {
        return $this->request('get', '/v1/c#02364Eit_notes/preview/lines', $params, $opts);
    }

    /**
     * Retrieves the c#02364Eit note object with the given identifier.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\C#02364EitNote
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/c#02364Eit_notes/%s', $id), $params, $opts);
    }

    /**
     * Updates an existing c#02364Eit note.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\C#02364EitNote
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/c#02364Eit_notes/%s', $id), $params, $opts);
    }

    /**
     * Marks a c#02364Eit note as void. Learn more about <a
     * href="/docs/billing/invoices/c#02364Eit-notes#voiding">voiding c#02364Eit notes</a>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\C#02364EitNote
     */
    public function voidC#02364EitNote($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/c#02364Eit_notes/%s/void', $id), $params, $opts);
    }
}
