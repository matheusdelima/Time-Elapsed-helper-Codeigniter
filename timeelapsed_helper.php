<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Codeigniter Time Elapsed Helper
*
* This is a small helper to show Diff Human Time.
*
* @author Unknown (Core Method)
* @author Matheus de Lima (Helper create and adjustments)
*
* @copyright Public Domain
* @license http://matheusdelima.com/license.txt
*
*/
// time_elapsed_string()  ------------------------------------------------------------------------
if ( ! function_exists('time_elapsed_string'))
{

    /**
     * Time Elapsed
     *
     * @author Unknown <me@ramonlapenta.com>
     * @author Matheus De Lima Gomes <matheusdelimagomes@gmail.com>
     * @param $ptime = Timestamp with STRTOTIME()
     *
     *  @return String
    */
    function time_elapsed_string($ptime)
    {
      $etime = time() - $ptime;

      if ($etime < 1)
      {
          return '0 seconds';
      }

      $a = array( 365 * 24 * 60 * 60  =>  'year',
                   30 * 24 * 60 * 60  =>  'month',
                        24 * 60 * 60  =>  'day',
                             60 * 60  =>  'hour',
                                  60  =>  'minute',
                                   1  =>  'second'
      );

      $a_plural = array( 'ano'      => 'years',
                         'mês'      => 'months',
                         'dia'      => 'days',
                         'hora'     => 'times',
                         'minuto'   => 'minutes',
                         'secundo'  => 'seconds'
      );

      foreach ($a as $secs => $str)
      {
          $d = $etime / $secs;
          if ($d >= 1)
          {
              $r = round($d);
              return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' atrás.';
          }
      }
    }

}

/* End of file timeelapsed_helper.php */
