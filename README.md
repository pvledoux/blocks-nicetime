# Deprecated

This plugin is deprecated as this functionality is built in Twig template engine:
http://twig.sensiolabs.org/doc/filters/date_modify.html

This plugin was just a sandbox to play with Blockcms (before it became Craftcms), and I'm not maintaining it.


# Nicetime


Nicetime is a plugin for [BlocksCMS](http://blockscms.com/) originally built for [ExpressionEngine](https://github.com/pvledoux/Nice_time.ee2_addon).  

This plugin converts a date to relative time. It will output 'now' if the date given is less then 5 seconds ago, 'xx unit ago' will be output for longer intervals (where unit will be seconds, minutes, hours, days or weeks). If the date is greater than 4 weeks, it will return the full date formatted with the parameter format.

**This is my first Blocks plugin. Any remark or suggestion is welcome.**

## Syntax

	<p>{{ date|nicetime('d-m-Y H:i') }}</p>
	<p>{{ date|nicetime('D, M j, Y', 'no') }}</p>
	<p>{{ '+3 days'|nicetime('m/d/Y', 'no') }}</p>
    
    
## Output

It will output this kind of result:

    now
    30 seconds ago
    5 minutes ago
    2 days ago
    3 weeks ago
    30 seconds from now
    5 minutes from now
    2 days from now
    3 weeks from now
    11-12-2012 11:24
    Monday, September 6, 2012
    
    
## Parameters


<table>
<thead>
<tr>
<th> Parameter </th>
<th> Required </th>
<th> Default </th>
<th> Remark </th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>format</strong> </td>
<td> optional </td>
<td> d-m-Y H:i </td>
<td> see <a href="http://php.net/manual/en/function.date.php">php.net</a> format all format</td>
</tr>
<tr>
<td><strong>relative</strong> </td>
<td> optional </td>
<td> yes </td>
<td> Should we display relative time?</td>
</tr>
</tbody>
</table>

 

## Licence
Copyright (c) 2012, Pv Ledoux All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of the nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
