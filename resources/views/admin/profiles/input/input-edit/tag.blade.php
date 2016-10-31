
<fieldset>
                @if( \Config::get('app.locale') == 'es' )
                    @foreach($tag as $tag)
                        <div class="col-xs-12 col-md-4">
                            <div class="checkbox">
                                <label>
                               
                                @foreach ($tagProfile as $key) 
                                    @if($key->id == $tag->id)
                                        <?php $checked = true; ?> 
                                    @endif
                                @endforeach
                                <?php if ($checked): ?>
                                    {!! Form::checkbox('tag_id[]',$tag->id, true, ['class'=>'tag_id']) !!}
                                <?php else: ?>
                                    {!! Form::checkbox('tag_id[]',$tag->id, null, ['class'=>'tag_id']) !!}
                                <?php endif ?>
                                    
                                    {{ $tag->name }}
                                    <?php $checked = false;  ?>  
                                </label>
                            </div>
                        </div>
                    @endforeach
                @else
                 @foreach($tag_en as $tag)
                        <div class="col-xs-12 col-md-4">
                            <div class="checkbox">
                                <label>                               
                                @foreach ($tagProfile as $key) 
                                    @if($key->id == $tag->id)
                                        <?php $checked = true; ?> 
                                    @endif
                                @endforeach
                                <?php if ($checked): ?>
                                    {!! Form::checkbox('tag_id[]',$tag->id, true, ['class'=>'tag_id']) !!}
                                <?php else: ?>
                                    {!! Form::checkbox('tag_id[]',$tag->id, null, ['class'=>'tag_id']) !!}
                                <?php endif ?>
                                    
                                    {{ $tag->name_en }}
                                    <?php $checked = false;  ?>  
                                </label>
                            </div>
                        </div>
                    @endforeach
                @endif
</fieldset>