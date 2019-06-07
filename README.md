# Time-Elapsed-helper-Codeigniter
This is a small helper to show Diff Human Time.

How to install:

* Copy this file for your helpers folder, Ex: application/helpers/
* Loading a helper file
``$this->load->helper('name');``
* In your template, you would invoke this function:
`` <?=time_elapsed_string(strtotime($value['created_at']),true); ?>``
