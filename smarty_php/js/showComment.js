export default function showComment(data){

    let create_time = data.create_time;
    let message_id = data.message_id;
    let user_name = data.user_name;
    let message_content = escapeHtml(data.message_content);
    let broad_id = data.broad_id;

    return `
    <div class="thumbnail editStatus" id="aComment">
    <div class="caption bg-light">
        <div class="row">
            <div class="col-sm-8">
                <p>${user_name}</p>
                <p><span class="glyphicon glyphicon-time"></span> ${create_time}</p>
            </div>

            <div class="col-sm-4 pull-right editIcon">
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
                    <span class="glyphicon glyphicon-th-large"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                <li>
                    <button type="button" class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#editComment${message_id}">
                        <span class="glyphicon glyphicon-pencil"></span> 修改
                    </button>
                </li>
                <li>  
                    <button type="button" class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#dltComment${message_id}">
                        <span class="glyphicon glyphicon-trash"></span> 刪除
                    </button>
                </li>
                </ul>
            </li>
            </ul>
            </div>

            <div class="modal fade" id="editComment${message_id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content" id="messageInput">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">修改留言</h4>
                </div>
                <form method="post" action="" id="editCommentForm" class="editCommentForm">
                    <div class="modal-body enterSubmit">
                        <div class="form-group">
                            <textarea name="editCommentText" required="required" class="form-control inputField" rows="3" style="resize:none;" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>${message_content}</textarea>
                        </div>
                            <input type="hidden" name="editComment" value="${message_id}" style="display: none"/>
                            <input type="hidden" name="broadId" value="${broad_id}" style="display: none"/>
                            <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                    </div>
                    <div class="modal-footer">
                        <button id="editSubmit" class="btn btn-success editSubmit submitBtn" value="${broad_id}">確認修改</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    </div>
                </form>
            </div>
            </div>
            </div>

            <div class="modal fade" id="dltComment${message_id}" role="dialog">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">刪除留言</h4>
                </div>
                <div class="modal-body">
                    進行此操作後資料將無法復原，請問確定刪除嗎?
                </div>
                <div class="modal-footer">
                    <form method="post" action="" class="dltCommentForm">
                        <input type="hidden" name="dltComment" value="${message_id}" style="display: none"/>
                        <input type="hidden" name="broadId" value="${broad_id}" style="display: none"/>
                        <button type="submit" class="btn btn-success dltSubmit">確認</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    </form>
                </div>
            </div>
            </div>
            </div>
        </div> <!-- end of row -->

        <div class="messageBody">
        <pre style="border: 0; background-color: transparent; resize:none; white-space: pre-wrap;"><p id="commentText">${message_content}</p></pre>
        </div>

    </div>
    </div>`;
}

export function escapeHtml(unsafe) {

    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
}

