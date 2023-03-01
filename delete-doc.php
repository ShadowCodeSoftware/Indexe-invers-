<php?
use Elastic\Elasticsearch\Exception\ClientResponseException;

try {
    $response = $client->delete([
        'index' => 'my_index',
        'id' => 'my_id'
    ]);
} catch (ClientResponseException $e) {
    if ($e->getCode() === 404) {
        // the document does not exist
    }
}
if ($response['acknowledge'] === 1) {
    // the document has been delete
}