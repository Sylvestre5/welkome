<div class="crud-list-row">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 align-self-center">
            <p>
                <a href="{{ route('vehicles.show', ['id' => Hashids::encode($row->id)]) }}">
                    {{ $row->registration }}
                </a>
            </p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 align-self-center">
            <p>
                {{ $row->brand }}
            </p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 align-self-center">
            <p>
                {{ $row->color }}
            </p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 align-self-center">
            <p>
                {{ trans('vehicles.' . $row->type->type) }}
            </p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 align-self-center">
            <p>
                {{ $row->created_at->format('y-m-d') }}
            </p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 align-self-center">
            @include('partials.dropdown-btn', [
                'options' => [
                    [
                        'option' => trans('common.seeMore'),
                        'url' => route('vehicles.show', ['id' => Hashids::encode($row->id)]),
                        'permission' => 'vehicles.show'
                    ],
                    [
                        'option' => trans('common.edit'),
                        'url' => route('vehicles.edit', [
                            'id' => Hashids::encode($row->id)
                        ]),
                        'permission' => 'vehicles.edit'
                    ],
                    [
                        'type' => 'confirm',
                        'option' => trans('common.delete'),
                        'url' => route('vehicles.destroy', [
                            'id' => Hashids::encode($row->id)
                        ]),
                        'method' => 'DELETE',
                        'permission' => 'vehicles.destroy'
                    ],
                ]
            ])
        </div>
    </div>
</div>
