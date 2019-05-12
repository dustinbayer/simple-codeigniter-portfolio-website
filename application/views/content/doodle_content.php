<!--------------------------------------------------------------------
! DOODLE BACKGROUND
!-------------------------------------------------------------------->

<css-doodle grid="5" class="doodle">
    :doodle {
        @grid: 5 / 100vmax;
        grid-gap: 4vmax;
    }

    background: #34372C;
    transform: scale(@rand(1, 5)) translate3d(@r(50px), @r(100px), 0);
    background: hsla(@r(70, 82), 11%, @r(15%, 23%), @r(.5));
    border-radius: @r(10px);
</css-doodle>

