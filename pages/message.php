<!-- message.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <style>
        element::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script>
        $(document).ready(function(){
            const userId = <?= $_SESSION['user_id']; ?>;
            var targetUserId;

            function messageSetTargetUser(id) {
                targetUserId = id;
                $('#recipient-id').attr('value', id);
                messageFetchMessage(id);
                messageSearchResultClear();

                // $.ajax({
                //     url: "../configs/handle_message-target.php",
                //     type: "GET",
                //     data: {target_id : id},
                //     success: function(data) {
                //         console.log(data);
                //     }
                // });
                console.log('Recipient ID:', $('#recipient-id').val()); 
                console.log('Target User ID:', targetUserId); // For debugging
            }

            function messageFetchConversations() {
                $.ajax({
                    url: '../configs/handle_message-conversations.php',
                    type: 'GET',
                    data: {user_id : userId},
                    success: function(response) {
                        $('#message_conversation-container').html(response);
                        messageFetchMessage(targetUserId);
                        $('.conversation-card').click(function() {
                        var userId = $(this).data('user-id');
                        messageSetTargetUser(userId);
                        });
                    }
                });
            }
            
            function messageFetchMessage(targetUserId) {
                $.ajax({
                    url: '../configs/handle_message-fetch.php',
                    type: 'GET',
                    data: { user_id: userId, target_user_id: targetUserId },
                    success: function(response) {
                        $('#message_view').html(response);
                    }
                });
            }

            function messageSearchResultClear() {
                $('#message_search-result').html('');
            }
            
            $(document).on('click', '.message_search-result', function() {
                var userId = $(this).data('user-id');
                messageSetTargetUser(userId);
            });

            $('#message_send-form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url: "../configs/handle_message-send.php",
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#message_send-status').html(response).show();
                        $('#message_send-form textarea[name="message-content"]').val('');
                        messageFetchMessage(targetUserId);
                        setTimeout(function(){$('#message_send-status').hide();}, 3000);
                    }
                });
            });

            $('#message_search').on('keyup', function(){
                let searchInput = $(this).val();

                if(searchInput){
                    $.ajax({
                        url: "../configs/handle_message-search.php",
                        type: 'GET',
                        data: {search_input:searchInput},
                        success: function(response) {
                            $('#message_search-result').html(response);
                        }
                    });
                } else { messageSearchResultClear(); }
            });
            setInterval(messageFetchConversations, 2000);
        });
    </script>
</head>
<body>
    <header>
        <?php addComponent('header') ?>
    </header>
    <main >
        <!-- convos display -->
        <div class="container my-3 rounded">
            <div class="row">
                <!-- convo search -->
                <div class="col">
                    <div class="input-group">
                        <input class="form-control " type="search" name="message_search" id="message_search" autocomplete="off">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                    </div>
                    <div class="container z-3 position-absolute w-25 shadow rounded" style="background: lightgrey" id="message_search-result"></div>
                    <div class="container overflow-scroll overflow-x-hidden mt-2 border-top border-bottom" style="height: 60vh;" id="message_conversation-container">
                    </div>
                </div>
                <!-- message display -->
                <div class="col-6 mx-3 rounded shadow border">
                    <div class="">
                        <p class="ps-2 pt-3">
                            Syed Ameer Sibuma <span class="badge rounded-pill text-bg-success">L3: Fully verified</span>
                        </p>
                    </div>
                    <div class="container overflow-scroll overflow-x-hidden border-top" style="height: 60vh;" id="message_view"></div>
                </div>
                <!-- actions -->
                <div class="col">
                    <div class="d-grid gap-3">
                        <button class="py-3 btn border shadow" type="button">View Profile</button>
                        <button class="py-3 btn border shadow" type="button">Transaction</button>
                        <button class="py-3 btn border shadow" type="button">Report</button>
                        <button class="py-3 btn border shadow" type="button">Request Docs</button>                    
                        <button class="py-3 btn border shadow" type="button">Settings</button>                    
                    </div>
                </div>
            </div>
            <!-- write message -->
            <div class="row">
                <div class="col" id="message_send-status"></div>
            </div>
            <div class="row mt-2">
                <div class="col shadow p-3 border rounded">
                    <form class="m-auto d-flex w-100" id="message_send-form">
                        <input type="hidden" name="recipient-id" id="recipient-id" value="">
                        <textarea class="form-control" name="message-content" rows="1"></textarea>
                        <button class="btn ms-2" style="background: #78c7e0;" name="message-send" type="submit"><i class="bi bi-send"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php addComponent('footer'); ?>
    </footer>
</body>
</html>
<!-- /message.php -->