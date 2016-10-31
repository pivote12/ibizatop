<fieldset>
    <div class="row">
        <div class="row col-md-12">
            <label class="col-md-2 control-label" for="inputSuccess">{!! trans('label.state_profile') !!}</label>
            <div class="col-md-10">
                <div class="radio col-md-5">
                    <label>
                        <input type="radio" name="is_active2"  value="true" checked="true">
                        {!! trans('label.active') !!}
                    </label>
                </div>
                <div class="radio col-md-5">
                    <label>
                        <input type="radio" name="is_active2"  value="false">
                        {!! trans('label.disable') !!}
                    </label>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileName">{!! trans('label.name_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control name"  name="name2"  >
            </div>
        </div>
        
        <div class="row col-md-6 Aage">
            <label class="col-md-4 control-label" for="profileAge">{!! trans('label.age_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control age" name="age2"  >
            </div>
        </div>
        
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label">{!! trans('label.phone_profile') !!}</label>
            <div class="col-md-8">
                <div class="input-group mb-md">
                <span class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </span>
                    <input type="text" class="form-control phone" name="phone2"  >
                </div>
            </div>
        </div>
        <div class="row col-md-6 Ameasurements">
            <label class="col-md-4 control-label" for="profileMeasure">{!! trans('label.measurements_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control measurements"  name="measurements2"  >
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6 Aheight">
            <label class="col-md-4 control-label" for="profileHeight">{!! trans('label.height') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control height"  name="height2"  >
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="inputSuccess">{!! trans('label.category_profile') !!}</label>
            <div class="col-md-8">
                <select class="form-control mb-md category" name="category2">
                    <option value="escorts">Escorts</option>
                    <option value="trans">Trans</option>
                    <option value="boys">Boys</option>
                    <option value="agencias">Agencias</option>
                </select>
            </div>
        </div>

    </div>
    <br>
    <div class="row Aweb" style="display:none;">
        <div class="row col-md-12">
            <label class="col-md-2 control-label" for="profileTimetable">web</label>
            <div class="col-md-10">
                <input type="text" class="form-control web" name="web2">
            </div>
        </div>
    </div>
    <div class="row Afeatured_escort">
        <div class="row col-md-6">
            <label class="col-xs-4 control-label mt-xs pt-none">{!! trans('label.escort_deluxe_profile') !!}</label>
            <div class="col-md-2">
                <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                    <input type="checkbox" id="profileDeluxe"  class="deluxe_escort33" name="deluxe_escort2">
                    <label for="profileDeluxe"></label>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="col-xs-4 control-label mt-xs pt-none">{!! trans('label.featured_escort_profile') !!}</label>
            <div class="col-md-2">
                <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                    <input type="checkbox" class="featured_escort444" id="profileFeatured" name="featured_escort2">
                    <label for="profileFeatured"></label>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row Aprice">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profilePrice">{!! trans('label.pryce_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control price" name="price2">
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileNationality">{!! trans('label.nationality_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="nationality2"  >
            </div>
        </div>
    </div>
    <br>

    <div class="row Alanguages">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileLanguage">{!! trans('label.languages_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="languages2">
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileOrientation">{!! trans('label.sexual_orientation_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="sexual_orientation2">
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileExit">{!! trans('label.departures_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="departures2"  >
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileTimetable">{!! trans('label.timetable_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="timetable2">
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-12">
            <label class="col-md-2 control-label" for="profileTimetable">{!! trans('label.zona') !!}</label>
            <div class="col-md-10">
                <input type="text" class="form-control zone" name="zona2">
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-12">
            <label class="col-md-2 control-label" for="textareaDefault">{!! trans('label.description_profile') !!}</label>
            <div class="col-md-10">
                <textarea class="form-control description" rows="3"  name="description2"  ></textarea>
            </div>
        </div>
    </div>
</fieldset>
<hr class="dotted tall">
<h4 class="mb-xlg">{!! trans('label.data_seo') !!}</h4>
<fieldset>

    <div class="row">
        <div class="row col-md-12">
            <label class="col-md-2 control-label" for="textareaDescmeta">{!! trans('label.description_metatags') !!}</label>
            <div class="col-md-10">
                <textarea class="form-control metatags" rows="3" name="description_metatags2"  ></textarea>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <label class="col-md-2 control-label" for="textareaKeywords">{!! trans('label.key_words') !!}</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="3" name="key_words2"  ></textarea>
            </div>
        </div>
    </div>
</fieldset>
