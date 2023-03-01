<php?
use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\ServerResponseException;

$params = [
    'index' => 'my_index',
    'body'  => [ 'testField' => 'abc']
];

try {
  $response = $client->index($params);
} catch (ClientResponseException $e) {
  // manage the 4xx error
} catch (ServerResponseException $e) {
  // manage the 5xx error
} catch (Exception $e) {
  // eg. network error like NoNodeAvailableException
}

print_r($response->asArray());  // response body content as array