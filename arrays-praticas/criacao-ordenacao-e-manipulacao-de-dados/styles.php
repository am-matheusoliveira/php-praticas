<style>
    html, body{
        font-family: sans-serif;
        background-color: #333;
        color: #eee;
    }

    h2{
        color: #458688;
        font-size: 23px;
    }

    hr{
        margin-top: 40px;
        margin-bottom: 30px;
        opacity: 0.2;
    }

    pre{
        background-color: #444;
        padding: 10px;
        font-size: 20px;
        color: #ecf0f1;
    }
    
    /* CONFIGURANDO A VISUALIZAÇÃO  DO var_dump PHP */
    .xdebug-var-dump > small:first-child { 
        display: none; 
    }

    .xdebug-var-dump > small::before { 
        content: "(";
    }
    
    .xdebug-var-dump > small::after {
        content: ")";
    }    
</style>