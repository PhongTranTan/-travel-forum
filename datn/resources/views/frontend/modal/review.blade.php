<div class="modal fade" id="modalReviewHandle" tabindex="-1" role="dialog" aria-labelledby="modalReviewHandleLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Viết bình luận</h5>
            </div>
            <div class="modal-body">
                <form class="form-content form-validate" method="POST" action="{{ route('post.review') }}"
                    id="frmReview">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $data->id }}">
                    <div class="form-group">
                        <input required class="form-control" type="text" name="title"
                            placeholder="Nhập tiêu đề, ví dụ: Món ăn ở đây thật tuyệt!">
                    </div>
                    <div class="form-group mb-20">
                        <textarea class="form-control" name="content" rows="6" required></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label name="rangeRating">Đánh giá</label>
                        <input type="text" name="rating" id="rangeRating">
                    </div>
                    <div class="form-group" style="text-align: center">
                        <button class="btn-form" type="submit">Hoàn tất</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="modalSuccessLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message</h5>
            </div>
            <div class="modal-body">
                <h5 style="text-align: center">Review Success</h5>
            </div>
        </div>
    </div>
</div>