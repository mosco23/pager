<?php
namespace Mosco\Pager\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use App\Models\Slider;
use Mosco\Pager\Models\Page;

class PageController extends Controller
{

    public static function index(){
        return self::makePage('home');
    }


    public static function makePage($slug = NULL){
        // $slug = $slug ?? 'home';
        $query = Page::with(
                [
                    'sections' => function($q){
                        $q->orderBy('rang', 'ASC');
                        $q->with('items');
                    },
                    'template',
                    // 'sectionitems',
            ]
        );

        $page = $query->where('slug', strtolower($slug))->get();
        
        if($page->isEmpty()):
            $slug = 'home';
            $query = Page::with(
                [
                    'sections' => function($q){
                        $q->orderBy('rang', 'ASC');
                        $q->with('items');
                    },
                    'template'
                ]
            );
            $page = $query->where('slug', 'home')->get();

        endif;


        $page = $page->toArray()[0];
        
        $data['template'] = $page['template']['vue'] ?? 'master';
        $data['pageName'] = $page['name'] ?? env('APP_NAME');
        $data['pageTitle'] = $page['title'] ?? NULL;
        $data['page'] = $page;
        $data['pageKeywords'] = $page['keywords'] ?? NULL ;
        $data['pageDescription'] = $page['description'] ?? NULL ;
        $lesSections = $page['sections'] ?? [];
        $data['tabSection'] = [];
        $data['slug'] = $slug;
        foreach($lesSections AS $index => $sect):
            $data['tabSection'][$index]['vue'] = $sect['vue'];
            $data['tabSection'][$index]['items'] = $sect['items'];
        endforeach;
        // $data['tabSection'] ??= $page['sections'];
        $data['data'] = self::getData($data['tabSection']);
        $data['tabSection'] = Arr::keyBy($data['tabSection'], 'vue');
        // dd($data);
        return view('page', $data);
    }

    public static function getSlider(){
        return self::arrayByKey(Slider::with('boutons')->where('active', true)
                ->orderBy('rang', 'ASC')->get()->toArray());
    }


    public static function getData(array $sections): array{
        $data = [];
        foreach($sections AS $section):
            $method  = "get".ucfirst($section['vue']);
            if(method_exists(self::class, $method)):
                $data[$section['vue']] = self::arrayByKey(call_user_func("self::$method")) ;
            endif;
        endforeach;
        return $data;
    }

    public static function getThumbnailImage(string $image, $suffixe = 'cropped'): string{
        $extension = pathinfo($image)[ "extension"];
        return str_replace(".$extension", "-$suffixe.$extension", $image);

    }

    public static function arrayByKey(array $array, string $key = 'id'): array{
        $data = [];
        foreach($array AS $k => $r):
            if(array_key_exists($key, $r)):
                $data[$r[$key]] = $r;
            else:
                $data[$k] = $r;
            endif;
        endforeach;
        return $data;
    }

    public static function arrayGroupByKey(array $array, string $key = NULL): array{
        if(!$key):
            return $array;
        endif;
        $data = [];
        foreach($array AS $k => $r):
            if(array_key_exists($key, $r)):
                $data[$r[$key]][] = $r;
            else:
                $data[$k] = $r;
            endif;
        endforeach;
        return $data;
    }
}
