<div class="modal" tabindex="-1" id="request-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/send" method="POST">
                @csrf
                <div class="modal-header black-border">
                    <h5 class="modal-title">Заявка</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="text-center">ФИО</label>
                        <input type="text" name="name" class="form-control black-input custom-input" value="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="text-center">Телефон</label>
                        <input type="text" name="phone" class="form-control black-input custom-input" value="" required="required">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="personal_data" value="" required="required">
                        <span>Я согласен на обработку <a href="/personal" target="_blank">персональных данных</a></span>
                    </div>
                </div>
                <div class="modal-footer black-border">
                    <button type="button" class="btn black-btn custom-btn sm-btn" data-bs-dismiss="modal">Закрыть</button>
                    <input type="submit" class="btn custom-btn red-btn sm-btn" value="Отправить">
                </div>
            </form>
        </div>
    </div>
</div>
