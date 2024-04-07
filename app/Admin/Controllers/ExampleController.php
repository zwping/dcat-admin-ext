<?php

namespace App\Admin\Controllers;

use Abovesky\DcatAdmin\MediaPlayer\Grid\AudioDisplayer;
use Abovesky\DcatAdmin\MediaPlayer\Grid\VideoDisplayer;
use Abovesky\DcatAdmin\MediaPlayer\Show\AudioField;
use Abovesky\DcatAdmin\MediaPlayer\Show\VideoField;
use App\Admin\Repositories\ExampleRepository;
use App\Http\Controllers\Controller;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ExampleController extends Controller {

    public function __construct(
        private ExampleRepository $mediaPlayer,
    ){
        $this->mediaPlayer = tap(new ExampleRepository, fn($it) => 
            $it->data = [
                [
                    'id'        => 1,
                    'video'     => 'https://www.w3schools.com/html/movie.mp4',
                    'audio'     => 'https://www.w3schools.com/html/movie.mp4',
                ],
            ]
        );
    }

    public function mediaPlayer(Content $content) {
        $grid = Grid::make($this->mediaPlayer, function (Grid $grid){
            $grid->disableCreateButton();
            // $grid->disableActions();
            $grid->disableRowSelector();
            $grid->disablePagination();
            $grid->number();
            $grid->disableEditButton();
            $grid->disableDeleteButton();

            $grid->column('video')->video(function(VideoDisplayer $video){
                $video->setControls(cover:'https://images.pexels.com/photos/20440051/pexels-photo-20440051.jpeg');
            });
            $grid->column('audio')->audio(function(AudioDisplayer $audio){
                $audio->title("test title");
                $audio->setControls(name:'TestName', artist:'TestAuther', cover:'https://images.pexels.com/photos/20440051/pexels-photo-20440051.jpeg');
            });
        });
        return $content
            ->header('音视频预览扩展')
            ->description('')
            ->body($grid)
            ;
    }

    public function mediaPlayerShow($id, Content $content) {
        $show = Show::make($id, $this->mediaPlayer, function (Show $show){
            $show->disableEditButton();
            $show->disableDeleteButton();

            $show->field('id');
            $show->field('video')->width(3)->video(screenshot:false, cover:'https://images.pexels.com/photos/20440051/pexels-photo-20440051.jpeg');
            $show->field('audio')->width(3)->audio(name:'测试音频', artist:'作者', cover:'https://images.pexels.com/photos/20440051/pexels-photo-20440051.jpeg');
        });
        return $content
            ->header('音视频预览扩展')
            ->description('')
            ->body($show)
            ;
    }



}
