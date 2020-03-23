@extends($page ?? 'vellum::modal')

@section('head')
	@include('vellum::modal.header-buttons', ['attributes' => arrayToHtmlAttributes(['id' => 'insert-media']), 'rightBtnTxt' => 'Add to Content', 'rightNormalBtnTxt' => 'Add New Survey'])
@endsection

@section('content')
<div class="px-3 mobile-panel mobile-modal-mt-100">
    <div class="row mb-3">
        <span class="cf-label">Insert Survey</span>
    </div>

    <div class="row">
        <form role="form" autocomplete="off">
            <div class="col-md-10 pl-0 mb-3">
                <input type="text" class="cf-input" name="keyword" placeholder="Search for survey id or title..." value="">
            </div>
            <div class="col-md-2 px-0 mb-3">
                <input type="submit" name="submit" value="Search" class="btn btn-primary btn-block cf-button">
            </div>
        </form>
    </div>

    <div class="row">
        <div class="alert alert-info selected-notif mb-3 py-2 hide">
            <span>Selected</span>
        </div>
    </div>

    <div class="row">
        <table class="table table-responsive table-bordered h6">
            <thead>
                <tr><th class="border-none"></th>
                <th class="border-none text-center">ID</th>
                <th class="border-none text-center">Survey Title</th>
                <th class="border-none text-center">Type</th>
                <th class="border-none text-center">Date Created</th>
                <th class="border-none">Review</th>
                </tr>
            </thead>
            <tbody>
				<tr>
                    <td style="width: 2%;"><input type="radio" name="selected" value="974" data-title="asd"></td>
                    <td style="width: 5%;" class="text-center">974</td>
					<td>
						<a href="#">asd</a>
					</td>
					<td style="width: 5%;" class="text-center">Poll</td>
					<td style="width: 5%;" class="text-center">Feb 20, 2020 02:35 pm</td>
					<td style="width: 5%;" class="text-center">
						<a href="http://staging.quill.summitmedia-digital.com/survey_poll/974/edit?back=2">
							<svg class="icon"><use xlink:href="#preview"></use></svg>
						</a>
					</td>
			</tbody>
        </table>

		<!-- <div class="clearfix mobile-modal-pb-50">
		    <div class="pull-left">
		        <a href="http://staging.quill.summitmedia-digital.com/survey/list?target=tinymce&amp;page=1&amp;limit=30" class="btn btn-link disabled">30</a><a href="http://staging.quill.summitmedia-digital.com/survey/list?target=tinymce&amp;page=1&amp;limit=60" class="btn btn-link ">60</a><a href="http://staging.quill.summitmedia-digital.com/survey/list?target=tinymce&amp;page=1&amp;limit=90" class="btn btn-link ">90</a>items per page
		    </div>
		    <div class="pull-right">
		                
		        <span class="mr-2">
		            <strong>1 - 30
		            </strong> of
		            <strong>953</strong>
		        </span>
				<a href="&amp;limit=30" class="btn btn-link paginate-link disabled">
		            <svg class="icon">
		                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left"></use>
		            </svg>
		        </a>
		        <a href="http://staging.quill.summitmedia-digital.com/survey/list?target=tinymce&amp;page=2&amp;limit=30" rel="next" class="btn btn-link paginate-link ">
		            <svg class="icon">
		                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
		            </svg>
		        </a>
			</div>
		</div> -->
	</div>
</div>
@endsection

@push('scripts')
@endpush
