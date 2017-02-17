var modMain = new Vue({
    el : '.site-index',
    mounted: function(){
        this.base = $('.site-index').data('url');
    },
    data : {
        p        : '',
        q        : '',
        n        : '',
        e        : '',
        phi      : '',
        d        : '',
        msg      : '',
        resultado : ''
    },
    methods : {

        calc : function(){
            var scope = this;
            $.get(this.base + '/site/get-claves', {
                    'p' : this.p,
                    'q' : this.q,
                    'e' : this.e,
                })
                .done(function (data) {
                    scope.n = data.valN;
                    scope.phi = data.numPhi;
                    scope.d = data.valD;
                })
                .fail(this.failReq);
        },
        desencriptar : function(){
            var scope = this;
            $.get(this.base + '/site/desencriptar', {
                    'msg' : this.msg,
                    'd'   : this.d,
                    'n'   : this.n,
                })
                .done(function (data) {
                    scope.resultado = data;
                })
                .fail(this.failReq);
        },
        failReq: function (e) {
            alert('Error al procesar la peticion, revise la consola para mas informacion.');
            console.log('Error processing your request: ', e);
        }

    }
});
