

<fieldset>
                    @foreach($tag as $tag)
                        <div class="col-xs-12 col-md-4">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('tag_id[]',$tag->id, null, ['class'=>'tag_id']) !!}
                                    @if( \Config::get('app.locale') == 'es' )
                                    {{ $tag->name }}
                                    @else
                                    {{ $tag->name_en }}
                                    @endif
                                </label>
                            </div>
                        </div>
                    @endforeach
</fieldset>