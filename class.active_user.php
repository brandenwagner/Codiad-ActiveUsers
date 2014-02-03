<?
require_once('../../components/active/class.active.php');
class ActiveUsers extends Active
{
    public $username    = "";
    public $path        = "";
    public $new_path    = "";
    public $actives     = "";
    public $data        = "";
    
    public function __construct()
    {
        $this->actives = getJSON('active.php');
    }
    
    public function ListActiveUsers()
    {
        if($this->actives)
        {
            foreach($this->actives as $active=>$data)
            {
              if(is_array($data) && isset($data['username']))
              {
                $active_users[] = $data['username'];
              }
            }
        }
        if(!empty($active_users))
            return array_unique($active_users);
        else
            return false;
    }
    public function listOpenFiles()
    {
        if($this->actives)
        {
            foreach($this->actives as $active=>$data)
            {
              if(is_array($data) && isset($data['username']))
              {
                $username = $data['username'];
                $active_files[$username][] = $data['path'];
              }
            }
        }
        if(!empty($active_files))
            return $active_files;
        else
            return false;
    }
}