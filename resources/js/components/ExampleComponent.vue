<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.listenNotify();
        },
        methods: {
            listenNotify() {
                Echo.private('App.User.1')
                    .notification((data) => {
                        console.log(data);
                        if (Notification.permission !== 'granted') {
                            Notification.requestPermission();
                        }
                        else {
                            var notification = new Notification('Notification title', {
                                icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
                                body: 'Hey there! You\'ve been notified!',
                            });
                        }
                    });
            }
        }
    }
</script>
