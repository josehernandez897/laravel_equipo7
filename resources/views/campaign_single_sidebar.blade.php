<div class="single-donate-wrap">

    <h3 class="campaign-single-sub-title">{{$campaign->short_description}}</h3>

    @if($campaign->user)
        <div class="single-author-box">
            <img src="{{$campaign->user->get_gravatar()}}">
            <p><strong>{{$campaign->user->name}}</strong> <br />   {{$campaign->address}} </p>
        </div>
    @endif

    @if($campaign->get_category)
        <div class="campaign-tag-list">
            <a href="#"><i class="glyphicon glyphicon-tag"></i> {{$campaign->get_category->category_name}} </a>
        </div>
    @endif

    <div class="campaign-progress-info">
        <h4>{!! get_amount($campaign->total_raised()) !!} <small>@lang('app.raised_of') {!! get_amount($campaign->goal) !!} @lang('app.goal')</small></h4>

        <div class="progress">
            @php
                $percent_raised = $campaign->percent_raised();
            @endphp
            <div class="progress-bar" role="progressbar" aria-valuenow="{{$percent_raised}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$percent_raised <= 100 ? $percent_raised : 100}}%;">
                {{$percent_raised}}%
            </div>
        </div>

        <ul>
            <li><strong>{{$campaign->days_left()}}</strong> @lang('app.days_left')</li>
            <li><strong>{{$campaign->total_payments}}</strong> @lang('app.backers')</li>
        </ul>
    </div>

    <hr />


    <div class="input-group">
        <input type="text" id="campaign_url_input" class="form-control" value="{{route('campaign_single', [$campaign->id, $campaign->slug])}}">
        <div class="input-group-btn">
            <button class="btn btn-primary" id="campaign_url_copy_btn">@lang('app.copy_link')</button>
        </div>
    </div>

    <hr />

  

    @php
        $is_ended = $campaign->is_ended();
    @endphp

    <div class="donate_form">

        <h2>@lang('app.donate')</h2>

        @if( ! $is_ended)

            <form action="{{route('add_to_cart')}}" class="form-horizontal" method="post" > @csrf

                <input type="hidden" name="campaign_id" value="{{$campaign->id}}" />
                <div class="donate_amount_field">
                    <div class="donate_currency">{!! get_currency_symbol(get_option('currency_sign')) !!}</div>
                    <input type="number" step="1" min="1" name="amount" class="form-control" value="{!! get_amount_raw($campaign->recommended_amount) !!}" placeholder="@lang('app.enter_amount')" />
                </div>

                @if($campaign->amount_prefilled())
                    <div class="donate-amount-placeholder">
                        <ul>
                            @foreach($campaign->amount_prefilled() as $amount_prefield)
                                <li data-value="{{$amount_prefield}}">{!! get_amount($amount_prefield) !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="donate-form-button">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">@lang('app.donate')</button>
                </div>
            </form>

        @else
            <div class="alert alert-warning">
                <h5>@lang('app.campaign_has_been_ended')</h5>
            </div>
        @endif

    </div>




</div>