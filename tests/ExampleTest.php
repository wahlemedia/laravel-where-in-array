<?php

namespace Wahlemedia\WhereInArray\Tests;

use Illuminate\Database\Eloquent\Model;

class ExampleTest extends TestCase
{

    protected $provider = 'Wahlemedia\WhereInArray\WhereInArrayServiceProvider';


    public function test_if_the_servie_provider_exist_on_the_application()
    {
        $this->assertTrue(in_array($this->provider, config('app.providers')));
    }

    public function test_if_the_query_where_in_array_is_crafted_correctly()
    {

        $model = new EloquentWhereInArrayTestModel;
        $query = $model->newQuery()->withoutGlobalScopes()->whereInArray('foo', ['bar', 'baz']);
        $expected = 'select * from "table" where ("foo" like ? or "foo" like ?)';
        $this->assertEquals($expected, $query->toSql());
    }

    public function test_if_the_query_where_not_in_array_is_crafted_correctly()
    {
        $model = new EloquentWhereInArrayTestModel;
        $query = $model->newQuery()->withoutGlobalScopes()->whereNotInArray('foo', ['bar', 'baz']);
        $expected = 'select * from "table" where ("foo" not like ? or "foo" not like ?)';
        $this->assertEquals($expected, $query->toSql());
    }
}

class EloquentWhereInArrayTestModel extends Model
{
    protected $table = 'table';

    public static function boot()
    {
        parent::boot();
    }
}
