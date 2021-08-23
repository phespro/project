<?php

return _document(
    _html(
        _head(),
        _body(
            _div('Hello World from Phespro'),
            _div('The best PHP framework'),
            _div('On the hole world'),
            _div(';-)'),
            _div('Happy Coding'),
            _div('And have fun'),

            _style(_raw("
                body { background-color: #242424; }
                div {
                    margin-top: 5rem;
                    color: #fff;
                    text-align: center;
                    transform: rotate(-10deg);
                }

                div:nth-child(even) {
                    transform: rotate(10deg);
                }
            ")),
        ),
    ),
);