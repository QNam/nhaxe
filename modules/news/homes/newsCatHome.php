<?php
namespace module\news\newsCatHome;
/*
 * @File MOD/blocks/blockCatHome.php
 * @author An Nguyen Huu (annh@webbnc.vn)
 * @Createdate 12/10/2014, 01:01 AM
 */
Class BlockHome extends \HomeGlobal {
    /**
     * $returnData - bien chua data de xuat ra o giao dien
     *@return array
     */
    public $returnData = array();
    /**
     * @var mixed
     */
    public $lang;
    /**
     * @var mixed
     */
    public $idw;
    /**
     * @var string
     */
    public $mod = 'news';
    public function __construct() {
        global $_B, $web;
        $this->lang = $_B['lang'];
        $this->idw  = $web['idw'];
        db_connect($this->mod);
        $this->setData();

        
    }
    /**
     *funntion setData;
     *gan du lieu cho returnData
     *@param
     *@return void
     */
    public function setData() {
        $data['home_cat'] = $this->getContentCategory();
        $data['home_traveldt'] = $this->getNewTravel();
        $data['home_news_hotdt'] = $this->getNewHot();
        $data['home_news_hot'] = $this->ModifyNew($data['home_news_hotdt']);
        $data['home_travel'] = $this->ModifyNew($data['home_traveldt']);


        $this->returnData = $data;
    }
    /**
     *funntion getData;
     *gan du lieu cho returnData
     *@param
     *@return void
     */
    public function getContentCategory() {
        $select = 'id, id_lang, parent_id, title, description, img, icon, bg, number_home,alias';
        $cat    = new \Model($this->lang . '_category');
        $cat->where('idw', $this->idw);
        $cat->where('status', 1);
        $cat->where('is_home', 1);
        $cat->orderBy('sort', 'ASC');
        //$cat->orderBy('create_time', 'DESC');
        $data = $cat->get(null, null, $select);
        $data = $this->fixArray($data);
        if (!empty($data)) {
            foreach ($data as $k => $v) {
                if ($this->lang != 'vi') {
                    $data[$k]['content_news'] = $this->getNewsHome($v['id_lang'], $v['number_home']);
                } else {
                    $data[$k]['content_news'] = $this->getNewsHome($v['id'], $v['number_home']);
                }
            }
        }

        return $data;
    }
    /**
     * @param $id
     * @param $limit
     * @return mixed
     */
    public function getNewsHome($id, $limit) {
        global $_L;
        $data = array();
        if ($limit == 0) {
            $limit = 7;
        }

        $select = 'id, id_lang, cat_id, title, img, short, status, create_time,alias,author,news_source,sort,details';
        $model  = new \Model($this->lang . '_news');
        $model->where('idw', $this->idw);
        $model->where('status', 1);
        $model->where('cat_id', '%,' . $id . ',%', 'like');
        if ($this->idw == 2548 || $this->idw == 1406) {
            $model->orderBy('sort', 'ASC');
        } else {
            $model->orderBy('create_time', 'DESC');
        }
        $data = $model->get(null, array(0, $limit), $select);
        if (!empty($data)) {
            foreach ($data as $k => $v) {
                $cat_id    = explode(',', $v['cat_id']);
                $parent_id = $cat_id[1];
                if ($this->lang != 'vi') {
                    $v['id'] = $v['id_lang'];
                }
                $data[$k]['link']        = $this->linkUrl($this->mod, 'detail', 'view', $parent_id . '_' . $v['id'], $v['alias']);
                $data[$k]['thumb']       = $this->loadImage($v['img'], 'resize', 200, 180);
                $data[$k]['create_time'] = date("d-m-Y", $v['create_time']);
                $data[$k]['create_day'] = date("d", $v['create_time']);
                $data[$k]['create_md'] = date("m/y", $v['create_time']);
            }
        }
        if($_COOKIE['sv']){
            echo '<pre>';
            print_r($data);
            echo '</pre>';

        }

        return $data;
    }

    private function getNewHot() {
        $newObj = new \Model($this->lang . '_news');
        $newObj->where('idw', $this->idw);
        $newObj->where('status', 1);
        $newObj->where('is_hot', 1);
        $newObj->orderBy('id', 'DESC');
        $cols = array('id', 'id_lang', 'title', 'short', 'img', 'cat_id', 'create_time', 'alias','author','news_source','details');
        return $newObj->get(null, $this->limit, $cols);
    }

    private function getNewTravel()
    {
        $newObj = new \Model($this->lang . '_news', db_connect('news'));
        $newObj->where('idw', $this->idw);
        $newObj->where('status', 1);
        $newObj->where('is_travel', 1);
        $newObj->orderBy('id', 'DESC');
        $cols = array('id', 'id_lang', 'title', 'img', 'cat_id', 'create_time', 'alias', 'author', 'news_source', 'label_name', 'original_price', 'sale_price', 'description1', 'description2', 'description3', 'is_travel','details');
        $result = $newObj->get(null, $this->limit, $cols);

        
        return $result;

    }

    private function ModifyNew($data)
    {
        foreach ($data as $key => $value) {
            $cat_id = explode(',', $value['cat_id']);
            // if(empty($value['alias'])){
            //     $value['alias'] = '.html';
            // }
            $parent_id = $cat_id[1];
            if ($this->lang != 'vi') {
                $data[$key]['link'] = $this->linkUrl($this->mod, 'detail', 'view', $parent_id . '_' . $value['id_lang'], $value['alias']);
            } else {
                $data[$key]['link'] = $this->linkUrl($this->mod, 'detail', 'view', $parent_id . '_' . $value['id'], $value['alias']);
            }

            $data[$key]['original_price'] = number_format($data[$key]['original_price']);
            $data[$key]['sale_price'] = number_format($data[$key]['sale_price']);

            $data[$key]['thumb'] = $this->loadImage($value['img'], 'resize', 200, 180);
            $data[$key]['create_time'] = date("H:i:s d-m-Y", $value['create_time']);
            $data[$key]['details'] = $value['details'];
        }
        return $data;
    }



    /**
     * @param array $data
     * @param $parrent
     * @return mixed
     */
    public function fixArray($data = array(), $parrent = 0) {
        $result = array();
        foreach ($data as $k => $v) {
            if ($v['parent_id'] == $parrent) {
                $result[] = $v;
                unset($data[$k]);
            }
        }
        if (sizeof($result) > 0) {
            foreach ($result as $k => $v) {
                if ($this->lang != 'vi') {
                    $v['id'] = $v['id_lang'];
                }
                $tmp                = $this->fixArray($data, $v['id']);
                $result[$k]['link'] = $this->linkUrl($this->mod, 'news', 'cat', $v['id'], $v['alias']);
                if (sizeof($tmp) > 0) {
                    $result[$k]['sub'] = $tmp;
                } else {
                    $result[$k]['sub'] = '';
                }
            }
        }

        return $result;
    }
}