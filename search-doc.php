<php?
$params = [
    'index' => 'my_index',
    'body'  => [
        'query' => [
            'match' => [
                'testField' => 'abc'
            ]
        ]
    ]
];
$response = $client->search($params);

printf("Total docs: %d\n", $response['hits']['total']['value']);
printf("Max score : %.4f\n", $response['hits']['max_score']);
printf("Took      : %d ms\n", $response['took']);

print_r($response['hits']['hits']); // documents