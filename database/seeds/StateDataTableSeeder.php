<?php

use Illuminate\Database\Seeder;
use App\Model\StateData;

class StateDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StateData::truncate();

        /***Alabama****/

        $state_data = [
            'state'             =>'Alabama',
            'state_abr'         =>'AL',
            'projection_H'      =>'0.3',

            'poll1_title'       =>'Google Consumer Surveys',
            'poll1_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll1_H'           =>'19%',
            'poll1_T'           =>'57%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'36%',
            'poll2_T'           =>'59%',

            'poll3_title'       =>'Strategy Research',
            'poll3_title_link'  =>'http://wkrg.com/2016/07/21/trump-wins-alabama-but-some-supporters-may-not-like-him/',
            'poll3_H'           =>'33%',
            'poll3_T'           =>'57%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'37%',
            'poll4_T'           =>'56%',

            'poll5_title'       =>'SurveyMonkey',
            'poll5_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll5_H'           =>'31%',
            'poll5_T'           =>'53%',

            'electoral_votes'       =>'9',
            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',
            'vap_2012'              =>'3600000',
            'turnout_2012'          =>'2010699',
            'reg_online'            =>'2016-10-24',
            'reg_mail'              =>'2016-10-24',
            'reg_person'            =>'2016-10-24',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /****Alaska****/

        $state_data = [
            'state'             =>'Alaska',
            'state_abr'         =>'AK',
            'projection_H'      =>'22.3',

            'poll1_title'       =>'Moore Information',
            'poll1_title_link'  =>'http://midnightsunak.com/wp-content/uploads/2016/09/Memo-AK-Senator-Murkowski-Aug2016.pdf',
            'poll1_H'           =>'29%',
            'poll1_T'           =>'39%',

            'poll2_title'       =>'SurveyMonkey',
            'poll2_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll2_H'           =>'31%',
            'poll2_T'           =>'38%',

            'poll3_title'       =>'CVOTER International',
            'poll3_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll3_H'           =>'40%',
            'poll3_T'           =>'55%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'47%',
            'poll4_T'           =>'37%',

            'poll5_title'       =>'Ivan Moore Research',
            'poll5_title_link'  =>'http://www.adn.com/politics/2016/08/21/voter-dissatisfaction-with-clinton-and-trump-has-libertarian-johnson-hoping-alaskans-go-third-party/',
            'poll5_H'           =>'30%',
            'poll5_T'           =>'39%',

            'electoral_votes'       =>'3',
            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'517000',
            'turnout_2012'          =>'220596',
            'reg_online'            =>'2016-10-09',
            'reg_mail'              =>'2016-10-09',
            'reg_person'            =>'2016-10-09',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /*****Arizona****/


        $state_data = [
            'state'             =>'Arizona',
            'state_abr'         =>'AZ',
            'projection_H'      =>'38.4',

            'poll1_title'       =>'Marist College',
            'poll1_title_link'  =>'http://www.nbcnews.com/politics/2016-election/clinton-trump-deadlocked-battleground-states-polls-n646216',
            'poll1_H'           =>'38%',
            'poll1_T'           =>'40%',

            'poll2_title'       =>'Data Orbital',
            'poll2_title_link'  =>'http://us12.campaign-archive2.com/?u=5a280d25318f2afe3f311adb6&id=ff56065af6',
            'poll2_H'           =>'38%',
            'poll2_T'           =>'40%',

            'poll3_title'       =>'Public Policy Polling',
            'poll3_title_link'  =>'http://nelpaction.org/wp-content/uploads/2016/08/AZResults1.pdf',
            'poll3_H'           =>'43%',
            'poll3_T'           =>'46%',

            'poll4_title'       =>'Gravis Marketing',
            'poll4_title_link'  =>'http://www.breitbart.com/big-government/2016/08/31/exclusive-breitbartgravis-arizona-presidential-poll-trump-44-clinton-40-with-johnson-8-stein-1/',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'CNN/Opinion Research Corp.',
            'poll5_title_link'  =>'http://www.cnn.com/2016/08/24/politics/arizona-north-carolina-polls-trump-clinton/index.html',
            'poll5_H'           =>'38%',
            'poll5_T'           =>'45%',

            'electoral_votes'       =>'11',
            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'4472000',
            'turnout_2012'          =>'1698653',
            'reg_online'            =>'2016-10-10',
            'reg_mail'              =>'2016-10-10',
            'reg_person'            =>'2016-10-10',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /*****Arkansas***/

        $state_data = [
            'state'             =>'Arkansas',
            'state_abr'         =>'AR',
            'projection_H'      =>'1.6',

            'poll1_title'       =>'Hendrix College',
            'poll1_title_link'  =>'http://katv.com/news/local/poll-donald-trump-extends-lead-over-hillary-clinton-in-arkansas',
            'poll1_H'           =>'34%',
            'poll1_T'           =>'55%',

            'poll2_title'       =>'Emerson College',
            'poll2_title_link'  =>'http://media.wix.com/ugd/3bebb2_b53ca6b673c14cdab9d68832bd7e74cb.pdf',
            'poll2_H'           =>'29%',
            'poll2_T'           =>'57%',

            'poll3_title'       =>'CVOTER International',
            'poll3_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll3_H'           =>'36%',
            'poll3_T'           =>'59%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'41%',
            'poll4_T'           =>'50%',

            'poll5_title'       =>'SurveyMonkey',
            'poll5_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll5_H'           =>'37%',
            'poll5_T'           =>'46%',

            'electoral_votes'       =>'6',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'2160000',
            'turnout_2012'          =>'1057609',
            'reg_online'            =>'2016-10-10',
            'reg_mail'              =>'2016-10-10',
            'reg_person'            =>'2016-10-10',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********California*****/


        $state_data = [
            'state'             =>'California',
            'state_abr'         =>'CA',
            'projection_H'      =>'99.8',

            'poll1_title'       =>'Public Policy Institute of California',
            'poll1_title_link'  =>'http://www.ppic.org/content/pubs/survey/S_916MBS.pdf',
            'poll1_H'           =>'47%',
            'poll1_T'           =>'31%',

            'poll2_title'       =>'SurveyUSA',
            'poll2_title_link'  =>'https://cbssanfran.files.wordpress.com/2016/09/survey_usa_president_senate_092916.pdf',
            'poll2_H'           =>'59%',
            'poll2_T'           =>'33%',

            'poll3_title'       =>'Field/IGS/YouGov',
            'poll3_title_link'  =>'http://www.sacbee.com/news/politics-government/election/presidential-election/article102803037.html',
            'poll3_H'           =>'50%',
            'poll3_T'           =>'33%',

            'poll4_title'       =>'SurveyMonkey',
            'poll4_title_link'  =>'http://www.latimes.com/politics/la-na-pol-california-presidential-poll-20160912-snap-story.html',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'SurveyUSA',
            'poll5_title_link'  =>'http://www.surveyusa.com/client/PollReport.aspx?g=be4ba04e-e65c-4fbc-9d1c-bf87874ec85d&utm_source=twitterfeed',
            'poll5_H'           =>'57%',
            'poll5_T'           =>'32%',

            'electoral_votes'       =>'55',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'23572000',
            'turnout_2012'          =>'12733961',
            'reg_online'            =>'2016-10-24',
            'reg_mail'              =>'2016-10-24',
            'reg_person'            =>'2016-10-24',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Colorado*****/
        $state_data = [
            'state'             =>'Colorado',
            'state_abr'         =>'CO',
            'projection_H'      =>'78.9',

            'poll1_title'       =>'CNN/Opinion Research Corp.',
            'poll1_title_link'  =>'http://i2.cdn.turner.com/cnn/2016/images/09/26/relpa1.pdf',
            'poll1_H'           =>'41%',
            'poll1_T'           =>'42%',

            'poll2_title'       =>'YouGov',
            'poll2_title_link'  =>'https://d25d2506sfb94s.cloudfront.net/cumulus_uploads/document/ehkbsotw61/CO_ForRelease_20160925.pdf',
            'poll2_H'           =>'40%',
            'poll2_T'           =>'39%',

            'poll3_title'       =>'Public Policy Polling',
            'poll3_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_BattlegroundStates_92916.pdf',
            'poll3_H'           =>'46%',
            'poll3_T'           =>'40%',

            'poll4_title'       =>'Keating Research, Inc.',
            'poll4_title_link'  =>'http://big.assets.huffingtonpost.com/Keating-Colorado-2016-09-29.pdf',
            'poll4_H'           =>'44%',
            'poll4_T'           =>'33%',

            'poll5_title'       =>'Monmouth University',
            'poll5_title_link'  =>'http://www.monmouth.edu/polling-institute/reports/MonmouthPoll_CO_100316/',
            'poll5_H'           =>'49%',
            'poll5_T'           =>'38%',

            'electoral_votes'       =>'9',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'3635000',
            'turnout_2012'          =>'2419698',
            'reg_online'            =>'2016-10-31',
            'reg_mail'              =>'2016-10-31',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Connecticut*****/
        $state_data = [
            'state'             =>'Connecticut',
            'state_abr'         =>'CT',
            'projection_H'      =>'96.8',

            'poll1_title'       =>'Emerson College',
            'poll1_title_link'  =>'http://media.wix.com/ugd/3bebb2_dd659ad4faf34206969d7dbef07995e2.pdf',
            'poll1_H'           =>'50%',
            'poll1_T'           =>'35%',

            'poll2_title'       =>'Ipsos',
            'poll2_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll2_H'           =>'52%',
            'poll2_T'           =>'34%',

            'poll3_title'       =>'Google Consumer Surveys',
            'poll3_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll3_H'           =>'44%',
            'poll3_T'           =>'27%',

            'poll4_title'       =>'SurveyMonkey',
            'poll4_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'CVOTER International',
            'poll5_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll5_H'           =>'54%',
            'poll5_T'           =>'43%',

            'electoral_votes'       =>'7',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'2547000',
            'turnout_2012'          =>'1507467',
            'reg_online'            =>'2016-11-01',
            'reg_mail'              =>'2016-11-01',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Delaware*****/
        $state_data = [
            'state'             =>'Delaware',
            'state_abr'         =>'DE',
            'projection_H'      =>'94.2',

            'poll1_title'       =>'University of Delaware',
            'poll1_title_link'  =>'https://www.cpc.udel.edu/news/Pages/clinton-leads-trump-51-to-30.aspx',
            'poll1_H'           =>'51%',
            'poll1_T'           =>'30%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'54%',
            'poll2_T'           =>'43%',

            'poll3_title'       =>'SurveyMonkey',
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'43%',
            'poll3_T'           =>'33%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'43%',
            'poll4_T'           =>'35%',

            'poll5_title'       =>'Fairleigh Dickinson University (PublicMind)',
            'poll5_title_link'  =>'http://www.delawareonline.com/story/news/2016/07/27/tnj-poll-hillary-has-strong-delaware-support/87626276/',
            'poll5_H'           =>'42%',
            'poll5_T'           =>'32%',

            'electoral_votes'       =>'3',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'678000',
            'turnout_2012'          =>'413844',
            'reg_online'            =>'2016-10-15',
            'reg_mail'              =>'2016-10-15',
            'reg_person'            =>'2016-10-15',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********D.C.*****/
        $state_data = [
            'state'             =>'D.C.',
            'state_abr'         =>'DC',
            'projection_H'      =>'99.9',

            'poll1_title'       =>'CVOTER International',
            'poll1_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll1_H'           =>'79%',
            'poll1_T'           =>'14%',

            'poll2_title'       =>'Google Consumer Surveys',
            'poll2_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll2_H'           =>'62%',
            'poll2_T'           =>'10%',

            'poll3_title'       =>'Google Consumer Surveys',
            'poll3_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll3_H'           =>'67%',
            'poll3_T'           =>'15%',

            'poll4_title'       =>'CVOTER International',
            'poll4_title_link'  =>'http://projects.fivethirtyeight.com.s3.amazonaws.com/polls/20160926_National_2.pdf',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'43%',
            'poll5_T'           =>'28%',

            'electoral_votes'       =>'3',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'D',
            'voting_history_1980'   =>'D',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'464000',
            'turnout_2012'          =>'243384',
            'reg_online'            =>'2016-10-11',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Florida*****/
        $state_data = [
            'state'             =>'Florida',
            'state_abr'         =>'FL',
            'projection_H'      =>'63.6',

            'poll1_title'       =>'Mason-Dixon Polling & Research, Inc.',
            'poll1_title_link'  =>'http://www.politico.com/states/f/?id=00000157-79b0-de4f-a777-79fb8c9c0001',
            'poll1_H'           =>'46%',
            'poll1_T'           =>'42%',

            'poll2_title'       =>'Public Policy Polling',
            'poll2_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_BattlegroundStates_92916.pdf',
            'poll2_H'           =>'45%',
            'poll2_T'           =>'43%',

            'poll3_title'       =>'Siena College',
            'poll3_title_link'  =>'https://www.siena.edu/news-events/article/clinton-41-trump-40-in-four-way-sunshine-state-race',
            'poll3_H'           =>'41%',
            'poll3_T'           =>'40%',

            'poll4_title'       =>'Quinnipiac University',
            'poll4_title_link'  =>'https://www.qu.edu/news-and-events/quinnipiac-university-poll/2016-presidential-swing-state-polls/release-detail?ReleaseID=2384',
            'poll4_H'           =>'46%',
            'poll4_T'           =>'41%',

            'poll5_title'       =>'YouGov',
            'poll5_title_link'  =>'https://d25d2506sfb94s.cloudfront.net/cumulus_uploads/document/wwktw0gibz/FL_ForRelease_20160911.pdf',
            'poll5_H'           =>'44%',
            'poll5_T'           =>'42%',

            'electoral_votes'       =>'29',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'13542000',
            'turnout_2012'          =>'8310955',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Georgia*****/
        $state_data = [
            'state'             =>'Georgia',
            'state_abr'         =>'GA',
            'projection_H'      =>'22.9',

            'poll1_title'       =>'Quinnipiac University',
            'poll1_title_link'  =>'http://big.assets.huffingtonpost.com/quipac.pdf',
            'poll1_H'           =>'40%',
            'poll1_T'           =>'47%',

            'poll2_title'       =>'Landmark Communications',
            'poll2_title_link'  =>'http://media.beta.wsbtv.com/document_dev/2016/09/23/prespoll923_6148208_ver1.0.pdf',
            'poll2_H'           =>'43%',
            'poll2_T'           =>'47%',

            'poll3_title'       =>'Marist College',
            'poll3_title_link'  =>'https://www.scribd.com/document/323578643/NBC-News-WSJ-Marist-Poll-Georgia-Annotated-Questionnaire-September-2016',
            'poll3_H'           =>'42%',
            'poll3_T'           =>'44%',

            'poll4_title'       =>'Monmouth University',
            'poll4_title_link'  =>'http://www.monmouth.edu/polling-institute/reports/MonmouthPoll_GA_091916/',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'JMC Enterprises',
            'poll5_title_link'  =>'http://winwithjmc.com/wp-content/uploads/2016/09/Georgia-Executive-Summary-Poll-2.pdf',
            'poll5_H'           =>'38%',
            'poll5_T'           =>'44%',

            'electoral_votes'       =>'16',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'D',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'6865000',
            'turnout_2012'          =>'3877038',
            'reg_online'            =>'2016-10-11',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Hawaii*****/
        $state_data = [
            'state'             =>'Hawaii',
            'state_abr'         =>'HI',
            'projection_H'      =>'99.7',

            'poll1_title'       =>'CVOTER International',
            'poll1_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll1_H'           =>'64%',
            'poll1_T'           =>'34%',

            'poll2_title'       =>'SurveyMonkey',
            'poll2_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll2_H'           =>'51%',
            'poll2_T'           =>'25%',

            'poll3_title'       =>'Google Consumer Surveys',
            'poll3_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll3_H'           =>'62%',
            'poll3_T'           =>'17%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'CVOTER International',
            'poll5_title_link'  =>'http://projects.fivethirtyeight.com.s3.amazonaws.com/polls/20160926_National_2.pdf',
            'poll5_H'           =>'64%',
            'poll5_T'           =>'33%',

            'electoral_votes'       =>'4',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'D',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'986000',
            'turnout_2012'          =>'429494',
            'reg_online'            =>'2016-10-10',
            'reg_mail'              =>'2016-10-08',
            'reg_person'            =>'2016-10-10',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Idaho*****/
        $state_data = [
            'state'             =>'Idaho',
            'state_abr'         =>'ID',
            'projection_H'      =>'0.8',

            'poll1_title'       =>'Dan Jones & Associates',
            'poll1_title_link'  =>'http://idahopoliticsweekly.com/politics/1218-Bob%20Bernick,%20Idaho%20Politics%20Weekly%20Contributor',
            'poll1_H'           =>'23%',
            'poll1_T'           =>'44%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'32%',
            'poll2_T'           =>'62%',

            'poll3_title'       =>'SurveyMonkey',
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'25%',
            'poll3_T'           =>'44%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'27%',
            'poll4_T'           =>'43%',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'27%',
            'poll5_T'           =>'60%',

            'electoral_votes'       =>'4',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'1133000',
            'turnout_2012'          =>'651871',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-14',
            'reg_person'            =>'2016-10-14',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Illinois*****/
        $state_data = [
            'state'             =>'Illinois',
            'state_abr'         =>'IL',
            'projection_H'      =>'98.3',

            'poll1_title'       =>'Southern Illinois University',
            'poll1_title_link'  =>'http://paulsimoninstitute.siu.edu/_common/documents/opinion-polling/simon-institute-poll/2016/oct-3-psppi-simon-poll-clinton-leads-trump.pdf',
            'poll1_H'           =>'53%',
            'poll1_T'           =>'28%',

            'poll2_title'       =>'Victory Research',
            'poll2_title_link'  =>'http://big.assets.huffingtonpost.com/VictoryResearch10242016poll.pdf',
            'poll2_H'           =>'49%',
            'poll2_T'           =>'35%',

            'poll3_title'       =>'Emerson College',
            'poll3_title_link'  =>'http://media.wix.com/ugd/3bebb2_4b2b9517da414c0fb1c825dfe5416794.pdf',
            'poll3_H'           =>'45%',
            'poll3_T'           =>'39%',

            'poll4_title'       =>'Loras College',
            'poll4_title_link'  =>'http://myweb.loras.edu/Loras/PDF/LorasILSurveySept2016.pdf',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'We Ask America',
            'poll5_title_link'  =>'http://rebootillinois.com/2016/09/13/illinoisans-wish-for-new-presidential-nominees-poll-finds/?utm_source=media&utm_medium=partner&utm_content=&utm_campaign=',
            'poll5_H'           =>'51%',
            'poll5_T'           =>'33%',

            'electoral_votes'       =>'20',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'887000',
            'turnout_2012'          =>'5091061',
            'reg_online'            =>'2016-10-23',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Indiana*****/
        $state_data = [
            'state'             =>'Indiana',
            'state_abr'         =>'IN',
            'projection_H'      =>'8.3',

            'poll1_title'       =>'Public Opinion Strategies',
            'poll1_title_link'  =>'http://www.wthr.com/article/exclusive-wthrhpi-poll-trump-has-solid-lead-on-clinton',
            'poll1_H'           =>'36%',
            'poll1_T'           =>'43%',

            'poll2_title'       =>'Google Consumer Surveys',
            'poll2_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll2_H'           =>'35%',
            'poll2_T'           =>'33%',

            'poll3_title'       =>'SurveyMonkey',
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'30%',
            'poll3_T'           =>'46%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'36%',
            'poll4_T'           =>'53%',

            'poll5_title'       =>'CVOTER International',
            'poll5_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll5_H'           =>'41%',
            'poll5_T'           =>'55%',

            'electoral_votes'       =>'11',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'4775000',
            'turnout_2012'          =>'2595024',
            'reg_online'            =>'2016-10-11',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);




        /********Iowa*****/
        $state_data = [
            'state'             =>'Iowa',
            'state_abr'         =>'IA',
            'projection_H'      =>'48.8',

            'poll1_title'       =>'Quinnipiac University',
            'poll1_title_link'  =>'http://big.assets.huffingtonpost.com/quipac.pdf',
            'poll1_H'           =>'37%',
            'poll1_T'           =>'44%',

            'poll2_title'       =>'RABA Research',
            'poll2_title_link'  =>'http://www.rabaresearch.com/documents/RABA-Simpson-College-Survey-September-09-2016.pdf',
            'poll2_H'           =>'39%',
            'poll2_T'           =>'40%',

            'poll3_title'       =>'Public Policy Polling',
            'poll3_title_link'  =>'http://weneednine.org/wp-content/uploads/2016/07/IAToplines1.pdf',
            'poll3_H'           =>'45%',
            'poll3_T'           =>'43%',

            'poll4_title'       =>'Loras College',
            'poll4_title_link'  =>'http://myweb.loras.edu/Loras/PDF/POLLStatewideIASurveySept26-2016.pdf',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Monmouth University',
            'poll5_title_link'  =>'http://www.monmouth.edu/polling-institute/reports/MonmouthPoll_IA_091516/',
            'poll5_H'           =>'37%',
            'poll5_T'           =>'45%',

            'electoral_votes'       =>'6',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'2264000',
            'turnout_2012'          =>'1565968',
            'reg_online'            =>'2016-10-29',
            'reg_mail'              =>'2016-10-24',
            'reg_person'            =>'2016-10-29',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Kansas*****/
        $state_data = [
            'state'             =>'Kansas',
            'state_abr'         =>'KS',
            'projection_H'      =>'8.2',

            'poll1_title'       =>'Remington',
            'poll1_title_link'  =>'http://m.cjonline.com/news/state/2016-09-01/sam-brownback-viewed-unfavorably-70-percent-confidential-gop-poll-blamed#gsc.tab=0',
            'poll1_H'           =>'37%',
            'poll1_T'           =>'44%',

            'poll2_title'       =>'SurveyUSA',
            'poll2_title_link'  =>'http://ksn.com/2016/09/13/ksn-news-poll-shows-donald-trump-leading-hillary-clinton-in-kansas/',
            'poll2_H'           =>'36%',
            'poll2_T'           =>'48%',

            'poll3_title'       =>'Google Consumer Surveys',
            'poll3_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll3_H'           =>'36%',
            'poll3_T'           =>'29%',

            'poll4_title'       =>'CVOTER International',
            'poll4_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll4_H'           =>'38%',
            'poll4_T'           =>'58%',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'34%',
            'poll5_T'           =>'54%',

            'electoral_votes'       =>'6',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'2038000',
            'turnout_2012'          =>'1113244',
            'reg_online'            =>'2016-10-18',
            'reg_mail'              =>'2016-10-18',
            'reg_person'            =>'2016-10-18',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Kentucky*****/

        $state_data = [
            'state'             =>'Kentucky',
            'state_abr'         =>'KY',
            'projection_H'      =>'2.9',

            'poll1_title'       =>'Google Consumer Surveys',
            'poll1_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll1_H'           =>'38%',
            'poll1_T'           =>'56%',

            'poll2_title'       =>'Ipsos',
            'poll2_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll2_H'           =>'38%',
            'poll2_T'           =>'56%',

            'poll3_title'       =>'CVOTER International',
            'poll3_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll3_H'           =>'37%',
            'poll3_T'           =>'59%',

            'poll4_title'       =>'SurveyMonkey',
            'poll4_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Harper Polling',
            'poll5_title_link'  =>'https://twitter.com/ScottJenningsKY/status/761216389399007234',
            'poll5_H'           =>'36%',
            'poll5_T'           =>'39%',

            'electoral_votes'       =>'8',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'3286000',
            'turnout_2012'          =>'1796717',
            'reg_online'            =>'2016-10-11',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Louisiana*****/

        $state_data = [
            'state'             =>'Louisiana',
            'state_abr'         =>'LA',
            'projection_H'      =>'3.3',

            'poll1_title'       =>'JMC Enterprises',
            'poll1_title_link'  =>'http://winwithjmc.com/wp-content/uploads/2016/09/Fleming-Executive-Summary-Poll-2-RELEASE.pdf',
            'poll1_H'           =>'35%',
            'poll1_T'           =>'45%',

            'poll2_title'       =>'Southern Media & Opinion Research',
            'poll2_title_link'  =>'http://www.nola.com/politics/index.ssf/2016/09/2016_louisiana_senate_race_wan.html',
            'poll2_H'           =>'33%',
            'poll2_T'           =>'49%',

            'poll3_title'       =>'Anzalone Liszt Grove Research',
            'poll3_title_link'  =>'https://lapolitics.com/wp-content/uploads/2016/09/ALG-Topline-Report.pdf',
            'poll3_H'           =>'40%',
            'poll3_T'           =>'46%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'38%',
            'poll4_T'           =>'50%',

            'poll5_title'       =>'CVOTER International',
            'poll5_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll5_H'           =>'39%',
            'poll5_T'           =>'57%',

            'electoral_votes'       =>'8',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'3343000',
            'turnout_2012'          =>'1993555',
            'reg_online'            =>'2016-10-11',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Maine*****/

        $state_data = [
            'state'             =>'Maine',
            'state_abr'         =>'ME',
            'projection_H'      =>'82.3',

            'poll1_title'       =>'SurveyUSA',
            'poll1_title_link'  =>'http://www.bostonglobe.com/news/politics/2016/09/13/new-poll-shows-competitive-race-maine/YNsB57jVpHmEJcJsFZRXMP/story.html?event=event25',
            'poll1_H'           =>'42%',
            'poll1_T'           =>'39%',

            'poll2_title'       =>'University of New Hampshire',
            'poll2_title_link'  =>'http://www.pressherald.com/2016/09/25/maine-voters-appear-poised-to-render-historic-electoral-college-vote-split-in-2016-election/',
            'poll2_H'           =>'40%',
            'poll2_T'           =>'36%',

            'poll3_title'       =>"Maine People's Resource Center",
            'poll3_title_link'  =>'http://mprc.me/research/0916_presidential.pdf',
            'poll3_H'           =>'37%',
            'poll3_T'           =>'37%',

            'poll4_title'       =>'Emerson College',
            'poll4_title_link'  =>'http://media.wix.com/ugd/3bebb2_dd659ad4faf34206969d7dbef07995e2.pdf',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'CVOTER International',
            'poll5_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll5_H'           =>'54%',
            'poll5_T'           =>'43%',

            'electoral_votes'       =>'4',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'1054000',
            'turnout_2012'          =>'668614',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-18',
            'reg_person'            =>'2016-10-18',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Maryland*****/

        $state_data = [
            'state'             =>'Maryland',
            'state_abr'         =>'MD',
            'projection_H'      =>'99.9',

            'poll1_title'       =>'Goucher College',
            'poll1_title_link'  =>'http://projects.fivethirtyeight.com.s3.amazonaws.com/polls/20160920_MD_2.pdf',
            'poll1_H'           =>'58%',
            'poll1_T'           =>'25%',

            'poll2_title'       =>'OpinionWorks',
            'poll2_title_link'  =>'http://www.baltimoresun.com/news/maryland/politics/bs-md-trump-clinton-poll-20160906-story.html',
            'poll2_H'           =>'54%',
            'poll2_T'           =>'25%',

            'poll3_title'       =>"Google Consumer Surveys",
            'poll3_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll3_H'           =>'49%',
            'poll3_T'           =>'23%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'52%',
            'poll4_T'           =>'33%',

            'poll5_title'       =>'SurveyMonkey',
            'poll5_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll5_H'           =>'54%',
            'poll5_T'           =>'27%',

            'electoral_votes'       =>'10',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'D',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'4096000',
            'turnout_2012'          =>'2477956',
            'reg_online'            =>'2016-10-18',
            'reg_mail'              =>'2016-10-18',
            'reg_person'            =>'2016-11-03',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Massachusetts*****/

        $state_data = [
            'state'             =>'Massachusetts',
            'state_abr'         =>'MA',
            'projection_H'      =>'99.1',

            'poll1_title'       =>'YouGov',
            'poll1_title_link'  =>'https://cbsboston.files.wordpress.com/2016/09/toplines_ma_sept.pdf',
            'poll1_H'           =>'47%',
            'poll1_T'           =>'34%',

            'poll2_title'       =>'MassINC Polling Group',
            'poll2_title_link'  =>'http://projects.fivethirtyeight.com.s3.amazonaws.com/polls/20160910_MA_1.pdf',
            'poll2_H'           =>'54%',
            'poll2_T'           =>'28%',

            'poll3_title'       =>"Emerson College",
            'poll3_title_link'  =>'http://media.wix.com/ugd/3bebb2_dd659ad4faf34206969d7dbef07995e2.pdf',
            'poll3_H'           =>'50%',
            'poll3_T'           =>'33%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'50%',
            'poll4_T'           =>'28%',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'50%',
            'poll5_T'           =>'23%',

            'electoral_votes'       =>'11',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'4700000',
            'turnout_2012'          =>'3128134',
            'reg_online'            =>'2016-10-19',
            'reg_mail'              =>'2016-10-19',
            'reg_person'            =>'2016-10-19',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Michigan*****/

        $state_data = [
            'state'             =>'Michigan',
            'state_abr'         =>'MI',
            'projection_H'      =>'82.9',

            'poll1_title'       =>'Glengariff Group, Inc.',
            'poll1_title_link'  =>'http://www.detroitnews.com/story/news/politics/2016/09/29/clinton-leads-michigan-poll-trump/91304744/',
            'poll1_H'           =>'42%',
            'poll1_T'           =>'35%',

            'poll2_title'       =>'Mitchell Research & Communications',
            'poll2_title_link'  =>'http://projects.fivethirtyeight.com.s3.amazonaws.com/polls/20160928_MI_1.pdf',
            'poll2_H'           =>'46%',
            'poll2_T'           =>'41%',

            'poll3_title'       =>"EPIC-MRA",
            'poll3_title_link'  =>'http://www.freep.com/story/news/politics/2016/09/15/donald-trump-hillary-clinton-michigan-poll/90381296/',
            'poll3_H'           =>'38%',
            'poll3_T'           =>'35%',

            'poll4_title'       =>'Target Insyght',
            'poll4_title_link'  =>'http://gcsionline.com/wp-content/uploads/2016/09/Polling_President_092716.pdf',
            'poll4_H'           =>'46%',
            'poll4_T'           =>'41%',

            'poll5_title'       =>'Emerson College',
            'poll5_title_link'  =>'http://media.wix.com/ugd/3bebb2_865ec63b1c494be78da4af7d7834766c.pdf',
            'poll5_H'           =>'45%',
            'poll5_T'           =>'40%',

            'electoral_votes'       =>'16',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'7317000',
            'turnout_2012'          =>'4630116',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Minnesota*****/

        $state_data = [
            'state'             =>'Minnesota',
            'state_abr'         =>'MN',
            'projection_H'      =>'82.8',

            'poll1_title'       =>'SurveyUSA',
            'poll1_title_link'  =>'http://kstp.com/politics/donald-trump-hillary-clinton-presidential-race-2016-kstp-survey-usa-poll/4273632/#.V-ieqgj5L4w.twitter',
            'poll1_H'           =>'46%',
            'poll1_T'           =>'39%',

            'poll2_title'       =>'Gravis Marketing',
            'poll2_title_link'  =>'https://www.scribd.com/document/325392290/MN-Sept-25-v2#from_embed',
            'poll2_H'           =>'43%',
            'poll2_T'           =>'43%',

            'poll3_title'       =>"Mason-Dixon Polling & Research, Inc.",
            'poll3_title_link'  =>'http://www.startribune.com/complete-minnesota-poll-results-presidential-race/393710181/',
            'poll3_H'           =>'44%',
            'poll3_T'           =>'38%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'38%',
            'poll4_T'           =>'28%',

            'poll5_title'       =>'SurveyMonkey',
            'poll5_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll5_H'           =>'41%',
            'poll5_T'           =>'34%',

            'electoral_votes'       =>'10',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'D',
            'voting_history_1980'   =>'D',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'3915000',
            'turnout_2012'          =>'2911471',
            'reg_online'            =>'2016-10-18',
            'reg_mail'              =>'2016-10-18',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Mississippi*****/

        $state_data = [
            'state'             =>'Mississippi',
            'state_abr'         =>'MS',
            'projection_H'      =>'4.2',

            'poll1_title'       =>'CVOTER International',
            'poll1_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll1_H'           =>'40%',
            'poll1_T'           =>'57%',

            'poll2_title'       =>'SurveyMonkey',
            'poll2_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll2_H'           =>'43%',
            'poll2_T'           =>'46%',

            'poll3_title'       =>"Magellan Strategies",
            'poll3_title_link'  =>'http://www.realclearpolitics.com/docs/2016/MagellanBR-YP_Poll_Toplines_081616.pdf',
            'poll3_H'           =>'39%',
            'poll3_T'           =>'52%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'24%',
            'poll4_T'           =>'46%',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'38%',
            'poll5_T'           =>'49%',

            'electoral_votes'       =>'6',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'2203000',
            'turnout_2012'          =>'1201354',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-08',
            'reg_person'            =>'2016-10-08',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Missouri*****/

        $state_data = [
            'state'             =>'Missouri',
            'state_abr'         =>'MO',
            'projection_H'      =>'15.8',

            'poll1_title'       =>'YouGov',
            'poll1_title_link'  =>'https://d25d2506sfb94s.cloudfront.net/cumulus_uploads/document/ehkbsotw61/CO_ForRelease_20160925.pdf',
            'poll1_H'           =>'37%',
            'poll1_T'           =>'46%',

            'poll2_title'       =>'Remington',
            'poll2_title_link'  =>'http://themissouritimes.com/34112/poll-koster-lead-increases-trump-10-points/',
            'poll2_H'           =>'39%',
            'poll2_T'           =>'49%',

            'poll3_title'       =>"Public Policy Polling",
            'poll3_title_link'  =>'http://nelpaction.org/wp-content/uploads/2016/08/MOResults1.pdf',
            'poll3_H'           =>'41%',
            'poll3_T'           =>'47%',

            'poll4_title'       =>'Emerson College',
            'poll4_title_link'  =>'http://media.wix.com/ugd/3bebb2_b53ca6b673c14cdab9d68832bd7e74cb.pdf',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'38%',
            'poll5_T'           =>'30%',

            'electoral_votes'       =>'10',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'4525000',
            'turnout_2012'          =>'2744835',
            'reg_online'            =>'2016-10-12',
            'reg_mail'              =>'2016-10-12',
            'reg_person'            =>'2016-10-12',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Montana*****/

        $state_data = [
            'state'             =>'Montana',
            'state_abr'         =>'MT',
            'projection_H'      =>'13.9',

            'poll1_title'       =>'CVOTER International',
            'poll1_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll1_H'           =>'39%',
            'poll1_T'           =>'57%',

            'poll2_title'       =>'SurveyMonkey',
            'poll2_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll2_H'           =>'31%',
            'poll2_T'           =>'44%',

            'poll3_title'       =>"Google Consumer Surveys",
            'poll3_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll3_H'           =>'31%',
            'poll3_T'           =>'38%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'40%',
            'poll4_T'           =>'53%',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'32%',
            'poll5_T'           =>'36%',

            'electoral_votes'       =>'3',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'779000',
            'turnout_2012'          =>'473328',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Nebraska*****/

        $state_data = [
            'state'             =>'Nebraska',
            'state_abr'         =>'NE',
            'projection_H'      =>'3.4',

            'poll1_title'       =>'Emerson College',
            'poll1_title_link'  =>'http://media.wix.com/ugd/3bebb2_c4ce441cb55942e99e386bf56daef127.pdf',
            'poll1_H'           =>'29%',
            'poll1_T'           =>'56%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'37%',
            'poll2_T'           =>'59%',

            'poll3_title'       =>"SurveyMonkey",
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'32%',
            'poll3_T'           =>'42%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'32%',
            'poll4_T'           =>'37%',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'33%',
            'poll5_T'           =>'51%',

            'electoral_votes'       =>'5',

            'voting_history_2012'   =>'',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'1330000',
            'turnout_2012'          =>'765083',
            'reg_online'            =>'2016-10-21',
            'reg_mail'              =>'2016-10-21',
            'reg_person'            =>'2016-10-28',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Nevada*****/

        $state_data = [
            'state'             =>'Nevada',
            'state_abr'         =>'NV',
            'projection_H'      =>'63.9',

            'poll1_title'       =>'Hart Research Associates',
            'poll1_title_link'  =>'http://www.ktnv.com/news/ralston/new-poll-nevada-races-for-president-senate-remain-close',
            'poll1_H'           =>'44%',
            'poll1_T'           =>'41%',

            'poll2_title'       =>'Bendixen & Amandi International',
            'poll2_title_link'  =>'http://www.reviewjournal.com/politics/election-2016/rj-s-nevada-poll-shows-clinton-and-trump-are-statistical-tie',
            'poll2_H'           =>'45%',
            'poll2_T'           =>'44%',

            'poll3_title'       =>"Fox News",
            'poll3_title_link'  =>'http://www.foxnews.com/politics/interactive/2016/09/21/fox-news-poll-nevada/',
            'poll3_H'           =>'40%',
            'poll3_T'           =>'43%',

            'poll4_title'       =>'Suffolk University',
            'poll4_title_link'  =>'http://www.suffolk.edu/news/67667.php#.V-6LzZMrLBI',
            'poll4_H'           =>'44%',
            'poll4_T'           =>'38%',

            'poll5_title'       =>'Marist College',
            'poll5_title_link'  =>'http://www.nbcnews.com/politics/2016-election/clinton-trump-deadlocked-battleground-states-polls-n646216',
            'poll5_H'           =>'41%',
            'poll5_T'           =>'42%',

            'electoral_votes'       =>'6',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'1869000',
            'turnout_2012'          =>'1011105',
            'reg_online'            =>'2016-10-18',
            'reg_mail'              =>'2016-10-08',
            'reg_person'            =>'2016-10-18',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);




        /********New Hampshire*****/

        $state_data = [
            'state'             =>'New Hampshire',
            'state_abr'         =>'NH',
            'projection_H'      =>'76.9',

            'poll1_title'       =>'MassINC Polling Group',
            'poll1_title_link'  =>'http://projects.fivethirtyeight.com.s3.amazonaws.com/polls/20160930_NH_1.pdf',
            'poll1_H'           =>'42%',
            'poll1_T'           =>'35%',

            'poll2_title'       =>'GBA Strategies',
            'poll2_title_link'  =>'http://endcitizensunited.org/wp-content/uploads/2016/09/ECU-NH-Memo-Sep29.pdf',
            'poll2_H'           =>'43%',
            'poll2_T'           =>'37%',

            'poll3_title'       =>"Marist College",
            'poll3_title_link'  =>'http://www.nbcnews.com/politics/2016-election/clinton-trump-deadlocked-battleground-states-polls-n646216',
            'poll3_H'           =>'39%',
            'poll3_T'           =>'37%',

            'poll4_title'       =>'Monmouth University',
            'poll4_title_link'  =>'http://www.monmouth.edu/polling-institute/reports/MonmouthPoll_NH_092116/',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'American Research Group',
            'poll5_title_link'  =>'http://americanresearchgroup.com/nhpoll/pres16/',
            'poll5_H'           =>'46%',
            'poll5_T'           =>'42%',

            'electoral_votes'       =>'4',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'1022000',
            'turnout_2012'          =>'701162',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-29',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********New Jersey*****/

        $state_data = [
            'state'             =>'New Jersey',
            'state_abr'         =>'NJ',
            'projection_H'      =>'95.2',

            'poll1_title'       =>'Stockton College',
            'poll1_title_link'  =>'http://intraweb.stockton.edu/eyos/hughescenter/content/docs/Polling/2016%20Polling/NJ16%20poll%201%20WFs%20(2)(1).pdf',
            'poll1_H'           =>'46%',
            'poll1_T'           =>'40%',

            'poll2_title'       =>'Emerson College',
            'poll2_title_link'  =>'http://media.wix.com/ugd/3bebb2_dd659ad4faf34206969d7dbef07995e2.pdf',
            'poll2_H'           =>'47%',
            'poll2_T'           =>'43%',

            'poll3_title'       =>"Rutgers University",
            'poll3_title_link'  =>'https://eagletonpollblog.files.wordpress.com/2016/09/rutgers-eagleton-poll-2016-election-head-to-head-results1.pdf',
            'poll3_H'           =>'50%',
            'poll3_T'           =>'29%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'42%',
            'poll4_T'           =>'33%',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'47%',
            'poll5_T'           =>'34%',

            'electoral_votes'       =>'14',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'5944000',
            'turnout_2012'          =>'3319684',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-18',
            'reg_person'            =>'2016-10-18',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********New Mexico*****/

        $state_data = [
            'state'             =>'New Mexico',
            'state_abr'         =>'NM',
            'projection_H'      =>'91.5',

            'poll1_title'       =>'SurveyUSA',
            'poll1_title_link'  =>'http://www.surveyusa.com/client/PollReport.aspx?g=fda53900-e6db-46a6-86a5-81e39fd92d32',
            'poll1_H'           =>'46%',
            'poll1_T'           =>'33%',

            'poll2_title'       =>'Research & Polling, Inc.',
            'poll2_title_link'  =>'https://www.abqjournal.com/857961/clinton-trump-in-tight-race-in-new-mexico.html',
            'poll2_H'           =>'35%',
            'poll2_T'           =>'31%',

            'poll3_title'       =>"Public Policy Polling",
            'poll3_title_link'  =>'http://nmpoliticalreport.com/89809/poll-clinton-leads-trump-in-nm-johnson-strong/',
            'poll3_H'           =>'40%',
            'poll3_T'           =>'31%',

            'poll4_title'       =>'SurveyMonkey',
            'poll4_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'CVOTER International',
            'poll5_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll5_H'           =>'50%',
            'poll5_T'           =>'45%',

            'electoral_votes'       =>'5',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'1463000',
            'turnout_2012'          =>'771560',
            'reg_online'            =>'2016-10-11',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);




        /********New York*****/

        $state_data = [
            'state'             =>'New York',
            'state_abr'         =>'NY',
            'projection_H'      =>'99.4',

            'poll1_title'       =>'Marist College',
            'poll1_title_link'  =>'http://www.nbcnewyork.com/news/local/Clinton-Holds-Huge-New-York-Lead-Over-Trump-Poll-394826981.html',
            'poll1_H'           =>'52%',
            'poll1_T'           =>'31%',

            'poll2_title'       =>'Siena College',
            'poll2_title_link'  =>'https://www.siena.edu/assets/files/news/SNY_September_2016_Poll_Release_--_Final345.pdf',
            'poll2_H'           =>'51%',
            'poll2_T'           =>'30%',

            'poll3_title'       =>"Emerson College",
            'poll3_title_link'  =>'http://media.wix.com/ugd/3bebb2_7e2146163ed04e60b05172ef8e530182.pdf',
            'poll3_H'           =>'52%',
            'poll3_T'           =>'34%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'43%',
            'poll4_T'           =>'31%',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'49%',
            'poll5_T'           =>'29%',

            'electoral_votes'       =>'29',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'13302000',
            'turnout_2012'          =>'6160193',
            'reg_online'            =>'2016-10-14',
            'reg_mail'              =>'2016-10-14',
            'reg_person'            =>'2016-10-14',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********North Carolina*****/

        $state_data = [
            'state'             =>'North Carolina',
            'state_abr'         =>'NC',
            'projection_H'      =>'59.5',

            'poll1_title'       =>'Selzer & Company',
            'poll1_title_link'  =>'https://assets.bwbx.io/documents/users/iqjWHBFdfxIU/rdISbD8Bk4tA/v0',
            'poll1_H'           =>'44%',
            'poll1_T'           =>'43%',

            'poll2_title'       =>'SurveyUSA',
            'poll2_title_link'  =>'http://www.wral.com/wral-poll-clinton-trump-in-virtual-tie-in-nc/16081925/',
            'poll2_H'           =>'46%',
            'poll2_T'           =>'44%',

            'poll3_title'       =>"Public Policy Polling",
            'poll3_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_BattlegroundStates_92916.pdf',
            'poll3_H'           =>'44%',
            'poll3_T'           =>'42%',

            'poll4_title'       =>'Siena College',
            'poll4_title_link'  =>'http://files.constantcontact.com/9c83fb30501/5f71c952-eb63-429a-8236-34989a8765ae.pdf',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Elon University',
            'poll5_title_link'  =>'https://www.elon.edu/E/elon-poll/poll-archive/100416.html',
            'poll5_H'           =>'45%',
            'poll5_T'           =>'39%',

            'electoral_votes'       =>'15',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'7030000',
            'turnout_2012'          =>'4499039',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-14',
            'reg_person'            =>'2016-11-05',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);




        /********North Dakota*****/

        $state_data = [
            'state'             =>'North Dakota',
            'state_abr'         =>'ND',
            'projection_H'      =>'7.0',

            'poll1_title'       =>'DFM Research',
            'poll1_title_link'  =>'https://www.scribd.com/document/324685567/ND-Pres-DFM-Research-Sept-2016',
            'poll1_H'           =>'32%',
            'poll1_T'           =>'43%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'36%',
            'poll2_T'           =>'57%',

            'poll3_title'       =>"SurveyMonkey",
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'26%',
            'poll3_T'           =>'51%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'23%',
            'poll4_T'           =>'45%',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'27%',
            'poll5_T'           =>'49%',

            'electoral_votes'       =>'3',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'523000',
            'turnout_2012'          =>'319825',
            'reg_online'            =>NULL,
//            'reg_mail'              =>'',
//            'reg_person'            =>'',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Ohio*****/

        $state_data = [
            'state'             =>'Ohio',
            'state_abr'         =>'OH',
            'projection_H'      =>'52.9',

            'poll1_title'       =>'Selzer & Company',
            'poll1_title_link'  =>'https://assets.bwbx.io/documents/users/iqjWHBFdfxIU/r2.771xfmKOI/v0',
            'poll1_H'           =>'39%',
            'poll1_T'           =>'42%',

            'poll2_title'       =>'Fox News',
            'poll2_title_link'  =>'http://www.foxnews.com/politics/interactive/2016/09/21/fox-news-poll-ohio/',
            'poll2_H'           =>'37%',
            'poll2_T'           =>'42%',

            'poll3_title'       =>"Monmouth University",
            'poll3_title_link'  =>'http://www.monmouth.edu/polling-institute/reports/MonmouthPoll_OH_100516/',
            'poll3_H'           =>'44%',
            'poll3_T'           =>'42%',

            'poll4_title'       =>'Quinnipiac University',
            'poll4_title_link'  =>'https://www.qu.edu/news-and-events/quinnipiac-university-poll/2016-presidential-swing-state-polls/release-detail?ReleaseID=2384',
            'poll4_H'           =>'42%',
            'poll4_T'           =>'47%',

            'poll5_title'       =>'CNN/Opinion Research Corp.',
            'poll5_title_link'  =>'http://i2.cdn.turner.com/cnn/2016/images/09/14/ohiopoll.pdf',
            'poll5_H'           =>'41%',
            'poll5_T'           =>'46%',

            'electoral_votes'       =>'18',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'8658000',
            'turnout_2012'          =>'5368417',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Oklahoma*****/

        $state_data = [
            'state'             =>'Oklahoma',
            'state_abr'         =>'OK',
            'projection_H'      =>'0.6',

            'poll1_title'       =>'SoonerPoll.com',
            'poll1_title_link'  =>'http://newsok.com/gallery/articleid/5518562/1/pictures/4442700?embeddedLinkType=gallery',
            'poll1_H'           =>'36%',
            'poll1_T'           =>'51%',

            'poll2_title'       =>'SurveyMonkey',
            'poll2_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll2_H'           =>'26%',
            'poll2_T'           =>'49%',

            'poll3_title'       =>"CVOTER International",
            'poll3_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll3_H'           =>'32%',
            'poll3_T'           =>'65%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'31%',
            'poll4_T'           =>'54%',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'29%',
            'poll5_T'           =>'40%',

            'electoral_votes'       =>'7',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'2748000',
            'turnout_2012'          =>'1332019',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-14',
            'reg_person'            =>'2016-10-14',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Oregon*****/

        $state_data = [
            'state'             =>'Oregon',
            'state_abr'         =>'OR',
            'projection_H'      =>'95.7',

            'poll1_title'       =>'Hoffman Research Group',
            'poll1_title_link'  =>'http://res.cloudinary.com/bdy4ger4/image/upload/v1475532480/HOFFMAN_0916_SURVEY_REPORT_mdltu9.pdf',
            'poll1_H'           =>'45%',
            'poll1_T'           =>'33%',

            'poll2_title'       =>'Davis, Hibbitts & Midghall, Inc.',
            'poll2_title_link'  =>'http://dhmresearch.com/wp-content/uploads/2016/09/DHM-Oregon-Statewide-Survey-Media-Advisory-Annotated-Questionnaire-September-2016.pdf',
            'poll2_H'           =>'38%',
            'poll2_T'           =>'25%',

            'poll3_title'       =>"icitizen",
            'poll3_title_link'  =>'https://icitizen.com/insights/oregon-poll-results-september-2016/',
            'poll3_H'           =>'43%',
            'poll3_T'           =>'28%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'48%',
            'poll4_T'           =>'26%',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'48%',
            'poll5_T'           =>'38%',

            'electoral_votes'       =>'7',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'2832000',
            'turnout_2012'          =>'1585432',
            'reg_online'            =>'2016-10-18',
            'reg_mail'              =>'2016-10-18',
            'reg_person'            =>'2016-10-18',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Pennsylvania*****/

        $state_data = [
            'state'             =>'Pennsylvania',
            'state_abr'         =>'PA',
            'projection_H'      =>'80.6',

            'poll1_title'       =>'Public Policy Polling',
            'poll1_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_BattlegroundStates_92916.pdf',
            'poll1_H'           =>'45%',
            'poll1_T'           =>'39%',

            'poll2_title'       =>'CNN/Opinion Research Corp.',
            'poll2_title_link'  =>'http://www.cnn.com/2016/09/26/politics/donald-trump-hillary-clinton-colorado-pennsylvania-polls/index.html',
            'poll2_H'           =>'45%',
            'poll2_T'           =>'44%',

            'poll3_title'       =>"Quinnipiac University",
            'poll3_title_link'  =>'https://www.qu.edu/news-and-events/quinnipiac-university-poll/2016-presidential-swing-state-polls/release-detail?ReleaseID=2384',
            'poll3_H'           =>'45%',
            'poll3_T'           =>'41%',

            'poll4_title'       =>'Gravis Marketing',
            'poll4_title_link'  =>'https://www.scribd.com/document/325392444/PA-Sept-25-v2#from_embed',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Monmouth University',
            'poll5_title_link'  =>'http://www.monmouth.edu/polling-institute/reports/MonmouthPoll_PA_100416/',
            'poll5_H'           =>'50%',
            'poll5_T'           =>'40%',

            'electoral_votes'       =>'20',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'9677000',
            'turnout_2012'          =>'5596499',
            'reg_online'            =>'2016-10-11',
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);




        /********Rhode Island*****/

        $state_data = [
            'state'             =>'Rhode Island',
            'state_abr'         =>'RI',
            'projection_H'      =>'91.3',

            'poll1_title'       =>'Emerson College',
            'poll1_title_link'  =>'http://media.wix.com/ugd/3bebb2_dd659ad4faf34206969d7dbef07995e2.pdf',
            'poll1_H'           =>'44%',
            'poll1_T'           =>'41%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'57%',
            'poll2_T'           =>'40%',

            'poll3_title'       =>"SurveyMonkey",
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'41%',
            'poll3_T'           =>'33%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'45%',
            'poll4_T'           =>'28%',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'42%',
            'poll5_T'           =>'23%',

            'electoral_votes'       =>'4',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'D',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'768000',
            'turnout_2012'          =>'417952',
            'reg_online'            =>'2016-10-09',
            'reg_mail'              =>'2016-10-09',
            'reg_person'            =>'2016-10-09',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********South Carolina*****/

        $state_data = [
            'state'             =>'South Carolina',
            'state_abr'         =>'SC',
            'projection_H'      =>'11.5',

            'poll1_title'       =>'Winthrop University',
            'poll1_title_link'  =>'http://www.postandcourier.com/20160929/160929356/donald-trump-holds-small-lead-against-hillary-clinton-in-new-state-poll',
            'poll1_H'           =>'38%',
            'poll1_T'           =>'42%',

            'poll2_title'       =>'Trafalgar Group',
            'poll2_title_link'  =>'https://drive.google.com/file/d/0B4lhKxf9pMitUjZhbDJwVGQteTA/view',
            'poll2_H'           =>'38%',
            'poll2_T'           =>'53%',

            'poll3_title'       =>"Starboard Communications",
            'poll3_title_link'  =>'http://www.postandcourier.com/20160913/160919767/trump-leads-in-new-sc-gop-poll-out-today',
            'poll3_H'           =>'35%',
            'poll3_T'           =>'48%',

            'poll4_title'       =>'First Tuesday Strategies',
            'poll4_title_link'  =>'http://www.wltx.com/mb/news/politics/poll-trump-up-by-12-points-in-sc/314493283',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Public Policy Polling',
            'poll5_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_SC_81116.pdf',
            'poll5_H'           =>'39%',
            'poll5_T'           =>'41%',

            'electoral_votes'       =>'9',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'3512000',
            'turnout_2012'          =>'1921363',
            'reg_online'            =>'2016-10-09',
            'reg_mail'              =>'2016-10-08',
            'reg_person'            =>'2016-10-08',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);




        /********South Dakota*****/

        $state_data = [
            'state'             =>'South Dakota',
            'state_abr'         =>'SD',
            'projection_H'      =>'13.7',

            'poll1_title'       =>'CVOTER International',
            'poll1_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll1_H'           =>'40%',
            'poll1_T'           =>'56%',

            'poll2_title'       =>'SurveyMonkey',
            'poll2_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll2_H'           =>'29%',
            'poll2_T'           =>'43%',

            'poll3_title'       =>"Ipsos",
            'poll3_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll3_H'           =>'32%',
            'poll3_T'           =>'47%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'36%',
            'poll4_T'           =>'37%',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'29%',
            'poll5_T'           =>'31%',

            'electoral_votes'       =>'3',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'613000',
            'turnout_2012'          =>'363691',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-24',
            'reg_person'            =>'2016-10-24',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Tennessee*****/

        $state_data = [
            'state'             =>'Tennessee',
            'state_abr'         =>'TN',
            'projection_H'      =>'2.7',

            'poll1_title'       =>'Middle Tennessee State University',
            'poll1_title_link'  =>'http://mtsupoll.org/2016/10/04/f2016pres/',
            'poll1_H'           =>'38%',
            'poll1_T'           =>'50%',

            'poll2_title'       =>'Google Consumer Surveys',
            'poll2_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll2_H'           =>'32%',
            'poll2_T'           =>'43%',

            'poll3_title'       =>"Ipsos",
            'poll3_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll3_H'           =>'35%',
            'poll3_T'           =>'47%',

            'poll4_title'       =>'CVOTER International',
            'poll4_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll4_H'           =>'38%',
            'poll4_T'           =>'57%',

            'poll5_title'       =>'SurveyMonkey',
            'poll5_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll5_H'           =>'31%',
            'poll5_T'           =>'51%',

            'electoral_votes'       =>'11',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'4787000',
            'turnout_2012'          =>'2409804',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Texas*****/

        $state_data = [
            'state'             =>'Texas',
            'state_abr'         =>'TX',
            'projection_H'      =>'10.8',

            'poll1_title'       =>'Emerson College',
            'poll1_title_link'  =>'http://media.wix.com/ugd/3bebb2_01dca97a9c05411984c50df92d62cf50.pdf',
            'poll1_H'           =>'36%',
            'poll1_T'           =>'42%',

            'poll2_title'       =>'Texas Lyceum',
            'poll2_title_link'  =>'http://www.texaslyceum.org/resources/Pictures/Texas%20Lyceum%202016%20Poll%20Topline.pdf',
            'poll2_H'           =>'32%',
            'poll2_T'           =>'39%',

            'poll3_title'       =>"SurveyMonkey",
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'40%',
            'poll3_T'           =>'40%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'33%',
            'poll4_T'           =>'40%',

            'poll5_title'       =>'Public Policy Polling',
            'poll5_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_TX_81616.pdf',
            'poll5_H'           =>'38%',
            'poll5_T'           =>'44%',

            'electoral_votes'       =>'38',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'16302000',
            'turnout_2012'          =>'7962799',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-11',
            'reg_person'            =>'2016-10-11',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Utah*****/

        $state_data = [
            'state'             =>'Utah',
            'state_abr'         =>'UT',
            'projection_H'      =>'2.0',

            'poll1_title'       =>'Dan Jones & Associates',
            'poll1_title_link'  =>'https://www.scribd.com/document/325174301/WEB-Presidential-Poll#fullscreen&from_embed',
            'poll1_H'           =>'25%',
            'poll1_T'           =>'34%',

            'poll2_title'       =>'Public Policy Polling',
            'poll2_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_UT_82316.pdf',
            'poll2_H'           =>'24%',
            'poll2_T'           =>'39%',

            'poll3_title'       =>"CVOTER International",
            'poll3_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll3_H'           =>'28%',
            'poll3_T'           =>'67%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'29%',
            'poll4_T'           =>'34%',

            'poll5_title'       =>'SurveyMonkey',
            'poll5_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll5_H'           =>'27%',
            'poll5_T'           =>'34%',

            'electoral_votes'       =>'6',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'1840000',
            'turnout_2012'          =>'923301',
            'reg_online'            =>'2016-11-01',
            'reg_mail'              =>'2016-11-01',
            'reg_person'            =>'2016-11-01',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);

        /********Vermont*****/

        $state_data = [
            'state'             =>'Vermont',
            'state_abr'         =>'VT',
            'projection_H'      =>'96.9',

            'poll1_title'       =>'Emerson College',
            'poll1_title_link'  =>'http://media.wix.com/ugd/3bebb2_dd659ad4faf34206969d7dbef07995e2.pdf',
            'poll1_H'           =>'47%',
            'poll1_T'           =>'26%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'61%',
            'poll2_T'           =>'35%',

            'poll3_title'       =>"SurveyMonkey",
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'45%',
            'poll3_T'           =>'24%',

            'poll4_title'       =>'Castleton University',
            'poll4_title_link'  =>'http://digital.vpr.net/post/vpr-poll-issues-races-and-full-results#vpr-poll-jul2016-files-downloads',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'44%',
            'poll5_T'           =>'27%',

            'electoral_votes'       =>'3',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'496000',
            'turnout_2012'          =>'298139',
            'reg_online'            =>'2016-11-02',
            'reg_mail'              =>'2016-11-02',
            'reg_person'            =>'2016-11-02',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Virginia*****/

        $state_data = [
            'state'             =>'Virginia',
            'state_abr'         =>'VA',
            'projection_H'      =>'86.7',

            'poll1_title'       =>'YouGov',
            'poll1_title_link'  =>'https://d25d2506sfb94s.cloudfront.net/cumulus_uploads/document/6pjlgkhppd/VA_ForRelease_20160925.pdf',
            'poll1_H'           =>'45%',
            'poll1_T'           =>'37%',

            'poll2_title'       =>'Public Policy Polling',
            'poll2_title_link'  =>'http://www.publicpolicypolling.com/pdf/2015/PPP_Release_BattlegroundStates_92916.pdf',
            'poll2_H'           =>'46%',
            'poll2_T'           =>'40%',

            'poll3_title'       =>"Christopher Newport University",
            'poll3_title_link'  =>'http://www.13newsnow.com/news/politics/elections/tracking-poll-shows-clintons-lead-edge-up-after-debate/328537372',
            'poll3_H'           =>'42%',
            'poll3_T'           =>'35%',

            'poll4_title'       =>'Quinnipiac University',
            'poll4_title_link'  =>'https://www.qu.edu/news-and-events/quinnipiac-university-poll/2016-presidential-swing-state-polls/release-detail?ReleaseID=2381',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Roanoke College',
            'poll5_title_link'  =>'http://www.roanoke.edu/about/news/rc_poll_politics_sept2016',
            'poll5_H'           =>'44%',
            'poll5_T'           =>'37%',

            'electoral_votes'       =>'13',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'5844000',
            'turnout_2012'          =>'3709916',
            'reg_online'            =>'2016-10-17',
            'reg_mail'              =>'2016-10-17',
            'reg_person'            =>'2016-10-17',
            'color'                 =>'swing',
            'swing_copy'            =>'this is a swing state and its very important ya know!?!! this is a lot of info about how important it is because oh baby do i tell you -- LET ME TELL YOU -- it is very important. i hear it may even DECIDE THE ELECTION okay?!?!?!??!? You gonna vote now?!?!?! <br/> <br/> YOU BETTER. man. like, seriously. Can you imagine a world where Trump is the president? Cmon. Vote.',
        ];

        StateData::create($state_data);



        /********Washington*****/

        $state_data = [
            'state'             =>'Washington',
            'state_abr'         =>'WA',
            'projection_H'      =>'96.0',

            'poll1_title'       =>'Emerson College',
            'poll1_title_link'  =>'http://media.wix.com/ugd/3bebb2_c4ce441cb55942e99e386bf56daef127.pdf',
            'poll1_H'           =>'44%',
            'poll1_T'           =>'38%',

            'poll2_title'       =>'Insights West',
            'poll2_title_link'  =>'http://www.insightswest.com/news/trump-leads-in-arizona-and-nevada-clinton-in-california-and-washington/',
            'poll2_H'           =>'38%',
            'poll2_T'           =>'28%',

            'poll3_title'       =>"Google Consumer Surveys",
            'poll3_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll3_H'           =>'45%',
            'poll3_T'           =>'25%',

            'poll4_title'       =>'Ipsos',
            'poll4_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll4_H'           =>'49%',
            'poll4_T'           =>'35%',

            'poll5_title'       =>'CVOTER International',
            'poll5_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll5_H'           =>'52%',
            'poll5_T'           =>'44%',

            'electoral_votes'       =>'12',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'4861000',
            'turnout_2012'          =>'3171957',
            'reg_online'            =>'2016-10-10',
            'reg_mail'              =>'2016-10-08',
            'reg_person'            =>'2016-10-31',
            'color'                 =>'blue',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********West Virginia*****/

        $state_data = [
            'state'             =>'West Virginia',
            'state_abr'         =>'WV',
            'projection_H'      =>'1.3',

            'poll1_title'       =>'Just Win Strategies',
            'poll1_title_link'  =>'http://wvmetronews.com/2016/09/19/gop-poll-shows-tight-gubernatorial-race-much-closer-than-metronews-west-virginia-poll/',
            'poll1_H'           =>'30%',
            'poll1_T'           =>'57%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'34%',
            'poll2_T'           =>'61%',

            'poll3_title'       =>"SurveyMonkey",
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'27%',
            'poll3_T'           =>'52%',

            'poll4_title'       =>'R.L. Repass & Partners',
            'poll4_title_link'  =>'http://wvmetronews.com/2016/09/01/metronews-west-virginia-poll-trump-still-the-choice-of-mountain-state-voters/',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Ipsos',
            'poll5_title_link'  =>'http://www.reuters.com/statesofthenation/',
            'poll5_H'           =>'33%',
            'poll5_T'           =>'53%',

            'electoral_votes'       =>'5',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'D',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'1467000',
            'turnout_2012'          =>'661643',
            'reg_online'            =>'2016-10-18',
            'reg_mail'              =>'2016-10-18',
            'reg_person'            =>'2016-10-18',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);


        /********Wisconsin*****/

        $state_data = [
            'state'             =>'Wisconsin',
            'state_abr'         =>'WI',
            'projection_H'      =>'83.2',

            'poll1_title'       =>'Marquette University',
            'poll1_title_link'  =>'https://law.marquette.edu/poll/2016/09/21/release-title/',
            'poll1_H'           =>'41%',
            'poll1_T'           =>'38%',

            'poll2_title'       =>'Emerson College',
            'poll2_title_link'  =>'http://media.wix.com/ugd/3bebb2_4b2b9517da414c0fb1c825dfe5416794.pdf',
            'poll2_H'           =>'45%',
            'poll2_T'           =>'38%',

            'poll3_title'       =>"Public Policy Polling",
            'poll3_title_link'  =>'http://nelpaction.org/wp-content/uploads/2016/08/WIResults1.pdf',
            'poll3_H'           =>'48%',
            'poll3_T'           =>'41%',

            'poll4_title'       =>'Monmouth University',
            'poll4_title_link'  =>'http://www.monmouth.edu/polling-institute/reports/MonmouthPoll_WI_083116/',
            'poll4_H'           =>'',
            'poll4_T'           =>'',

            'poll5_title'       =>'Marquette University',
            'poll5_title_link'  =>'https://law.marquette.edu/poll/2016/08/31/new-marquette-law-school-poll-finds-clinton-edge-over-trump-narrowing-to-pre-convention-levels-among-wisconsin-voters/',
            'poll5_H'           =>'41%',
            'poll5_T'           =>'38%',

            'electoral_votes'       =>'10',

            'voting_history_2012'   =>'D',
            'voting_history_2008'   =>'D',
            'voting_history_2004'   =>'D',
            'voting_history_2000'   =>'D',
            'voting_history_1996'   =>'D',
            'voting_history_1992'   =>'D',
            'voting_history_1988'   =>'D',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'D',

            'vap_2012'              =>'4283000',
            'turnout_2012'          =>'3056802',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-19',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'swing',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



        /********Wyoming*****/

        $state_data = [
            'state'             =>'Wyoming',
            'state_abr'         =>'WY',
            'projection_H'      =>'1.8',

            'poll1_title'       =>'DFM Research',
            'poll1_title_link'  =>'https://www.scribd.com/document/324811878/WY-AL-DFM-Research-for-Ryan-Greene-Sept-2016',
            'poll1_H'           =>'19%',
            'poll1_T'           =>'54%',

            'poll2_title'       =>'CVOTER International',
            'poll2_title_link'  =>'http://www.upi.com/Top_News/US/2016/10/03/UPICVoter-state-polls-Donald-Trump-gains-support-in-all-but-5-states/6881475512049/',
            'poll2_H'           =>'29%',
            'poll2_T'           =>'65%',

            'poll3_title'       =>"SurveyMonkey",
            'poll3_title_link'  =>'https://www.washingtonpost.com/politics/a-new-50-state-poll-shows-exactly-why-clinton-holds-the-advantage-over-trump/2016/09/05/13458832-7152-11e6-9705-23e51a2f424d_story.html',
            'poll3_H'           =>'21%',
            'poll3_T'           =>'57%',

            'poll4_title'       =>'Google Consumer Surveys',
            'poll4_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll4_H'           =>'19%',
            'poll4_T'           =>'35%',

            'poll5_title'       =>'Google Consumer Surveys',
            'poll5_title_link'  =>'https://datastudio.google.com/u/0/#/org//reporting/0B29GVb5ISrT0TGk1TW5tVF9Ed2M/page/GsS',
            'poll5_H'           =>'18%',
            'poll5_T'           =>'46%',

            'electoral_votes'       =>'3',

            'voting_history_2012'   =>'R',
            'voting_history_2008'   =>'R',
            'voting_history_2004'   =>'R',
            'voting_history_2000'   =>'R',
            'voting_history_1996'   =>'R',
            'voting_history_1992'   =>'R',
            'voting_history_1988'   =>'R',
            'voting_history_1984'   =>'R',
            'voting_history_1980'   =>'R',
            'voting_history_1976'   =>'R',

            'vap_2012'              =>'435000',
            'turnout_2012'          =>'245785',
            'reg_online'            =>NULL,
            'reg_mail'              =>'2016-10-25',
            'reg_person'            =>'2016-11-08',
            'color'                 =>'red',
            'swing_copy'            =>'',
        ];

        StateData::create($state_data);



    }
}
