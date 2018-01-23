<?php

namespace App\Http\Controllers\Front;

class PressReleaseController extends BaseController
{
	public function index()
	{
		return $this->output( 'press-releases.index' );
	}

	public function detail( $id, $slug )
	{
		if($id == 1){
			return $this->output( 'press-releases.international_tax' );
		}else if($id == 2){
			return $this->output( 'press-releases.indonesia_tuan' );
		}else if($id == 3) {
            return $this->output('press-releases.indonesia_imf');
        }else if($id == 4){
                return $this->output( 'press-releases.indonesia_ready_to_host' );
		}else if($id == 5){
            return $this->output( 'press-releases.indonesia_ready_to_host-INDONESIA' );
		}else if($id == 6){
			return $this->output( 'press-releases.conference_IIW' );
        }else if($id == 7){
			return $this->output( 'press-releases.bali_safe_indonesia_ready_to_host' );
        }else if($id == 8){
            return $this->output( 'press-releases.mengelola_urbanisasi' );
        }else if($id == 9){
            return $this->output( 'press-releases.release_vti_jogja' );
        }else{
			return $this->output( 'press-releases.detail' );
		}
	}
}
