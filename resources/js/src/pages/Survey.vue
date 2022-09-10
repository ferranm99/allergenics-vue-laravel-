<template>
    <b-container class="wrap">
        <div class="content">
            <div class="agg-survey-container">
                    <div class="agg-survey-inner pt-lg-4">
                        <main class="main">
                            <!-- main start point-->

                            <form id="survey-form" action="">
                                <input type="hidden" id="part_id" value="3">
                                <input type="hidden" id="survey_code" value="4Yw7Kfs69wf">

                                <div id="survey" class="">

<!--                                    Yes/No question type-->
                                    <div id="slide_1">
                                        <div class="ag-survey-inner radiogroup ag-survey-question1">

                                            <h1>Is the test for you, or someone else?</h1>
                                            <h6></h6>
                                            <h6>(1st of 4 questions)</h6>

                                            <input id="question_type" type="hidden" name="question_type" value="radiogroup">
                                            <input id="step" type="hidden" name="page" value="301">

                                            <div class="radio-custom-container">
                                                <label class="custom-control custom-radio">
                                                    <input id="question1" name="question1" type="radio" value="myself" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Myself</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="question1" name="question1" type="radio" value="someone_else" class="custom-control-input" checked="">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Someone else</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="display: none" id="slide_2">
                                        <div class="ag-survey-inner text ag-survey-question3">

                                            <h1>Please tell us the name of the person the test is for</h1>
                                            <h6></h6>
                                            <h6>(first name)</h6>

                                            <input id="question_type" type="hidden" name="question_type" value="text">
                                            <input id="step" type="hidden" name="page" value="303">

                                            <div class="agg-input-container">
                                                <input type="text" name="question3" value="">
                                                <span class="icon-arrow-right"></span>
                                            </div>

                                        </div>

                                        <div class="ag-survey-inner text ag-survey-question29">

                                            <h1></h1>
                                            <h6></h6>
                                            <h6>(last name)</h6>

                                            <input id="question_type" type="hidden" name="question_type" value="text">
                                            <input id="step" type="hidden" name="page" value="303">

                                            <div class="agg-input-container">
                                                <input type="text" name="question29" value="">
                                                <span class="icon-arrow-right"></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div style="display: none" id="slide_3">
                                        <div class="ag-survey-inner radiogroup ag-survey-question4">

                                            <h1>Gender?</h1>
                                            <h6></h6>
                                            <h6>(last 2 questions)</h6>

                                            <input id="question_type" type="hidden" name="question_type" value="radiogroup">
                                            <input id="step" type="hidden" name="page" value="304">

                                            <div class="radio-custom-container">
                                                <label class="custom-control custom-radio">
                                                    <input id="question4" name="question4" type="radio" value="male" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Male</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="question4" name="question4" type="radio" value="female" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Female</span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="ag-survey-inner numberselect ag-survey-question5">

                                            <h1>Age?</h1>
                                            <h6></h6>

                                            <input id="question_type" type="hidden" name="question_type" value="numberselect">
                                            <input id="step" type="hidden" name="page" value="304">

                                            <div class="agg-input-container">
                                                <select class="custom-control" name="question5" id="age">
                                                    <option value="" disabled="" selected="">Select your age</option>
                                                    <option value="0">0-6 months</option>
                                                    <option value="0.5">7-12 months</option>

                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>

                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>

                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>

                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>

                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>

                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>

                                                    <option value="60">60</option>
                                                    <option value="61">61</option>
                                                    <option value="62">62</option>
                                                    <option value="63">63</option>
                                                    <option value="64">64</option>
                                                    <option value="65">65</option>
                                                    <option value="66">66</option>
                                                    <option value="67">67</option>
                                                    <option value="68">68</option>
                                                    <option value="69">69</option>

                                                    <option value="70">70</option>
                                                    <option value="71">71</option>
                                                    <option value="72">72</option>
                                                    <option value="73">73</option>
                                                    <option value="74">74</option>
                                                    <option value="75">75</option>
                                                    <option value="76">76</option>
                                                    <option value="77">77</option>
                                                    <option value="78">78</option>
                                                    <option value="79">79</option>

                                                    <option value="80">80</option>
                                                    <option value="81">81</option>
                                                    <option value="82">82</option>
                                                    <option value="83">83</option>
                                                    <option value="84">84</option>
                                                    <option value="85">85</option>
                                                    <option value="86">86</option>
                                                    <option value="87">87</option>
                                                    <option value="88">88</option>
                                                    <option value="89">89</option>

                                                    <option value="90">90</option>
                                                    <option value="91">91</option>
                                                    <option value="92">92</option>
                                                    <option value="93">93</option>
                                                    <option value="94">94</option>
                                                    <option value="95">95</option>
                                                    <option value="96">96</option>
                                                    <option value="97">97</option>
                                                    <option value="98">98</option>
                                                    <option value="99">99</option>

                                                    <option value="100">100</option>
                                                    <option value="101">101</option>
                                                    <option value="102">102</option>
                                                    <option value="103">103</option>
                                                    <option value="104">104</option>
                                                    <option value="105">105</option>
                                                    <option value="106">106</option>
                                                    <option value="107">107</option>
                                                    <option value="108">108</option>
                                                    <option value="109">109</option>

                                                    <option value="110">110</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div>

<!--                                    Multiple Checkboxes-->
                                    <div style="display: none" id="slide_4">
                                        <div class="ag-survey-inner checkbox ag-survey-question9">

                                            <h1>Tell us if there are any of the following Digestive symptoms:</h1>
                                            <h6> multiple answers allowed </h6>

                                            <input id="question_type" type="hidden" name="question_type" value="checkbox">
                                            <input id="step" type="hidden" name="page" value="309">

                                            <b-row>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[bloating]" value="bloating" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Bloating</span>
                                                    </label>
                                                </b-col>

                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[stomach_pain]" value="stomach_pain" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Stomach pain - discomfort</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[abdominal_pain]" value="abdominal_pain" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Abdominal pain/discomfort</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[heartburn]" value="heartburn" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Heartburn</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[flatulence]" value="flatulence" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Flatulence</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[belching]" value="belching" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Belching</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[diarrhoea]" value="diarrhoea" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Diarrhoea</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[constipation]" value="constipation" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Constipation</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="question9" name="question9[nausea]" value="nausea" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Nausea</span>
                                                    </label>
                                                </b-col>
                                                <b-col cols="12" xs="6" md="4" class="checkbox-custom-container">
                                                    <label class="custom-control custom-checkbox ag-custom-control--none">
                                                        <input id="question9" name="question9[none]" value="none" type="checkbox" class="custom-control-input">

                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">None</span>
                                                    </label>
                                                </b-col>

                                            </b-row>


                                            </div>
                                    </div>

<!--                                    Email (single input) question-->
                                    <div style="display: none" id="slide_5">
                                        <div class="ag-survey-inner email ag-survey-question20">

                                            <h1>What's your e-mail?</h1>
                                            <h6></h6>
                                            <h6>(So we can save your answers)</h6>

                                            <input id="question_type" type="hidden" name="question_type" value="email">
                                            <input id="step" type="hidden" name="page" value="321">

                                            <div class="agg-input-container">
                                                <input type="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,24}$" autocomplete="off" name="question20" value="">
                                                <span class="icon-arrow-right"></span>
                                                <span class="hidden"></span>
                                            </div>
                                        </div>
                                    </div>

<!--                                    Single Answer Radio Buttons-->
                                    <div style="display: none" id="slide_6">
                                        <div class="ag-survey-inner radiogroup ag-survey-question25">

                                            <h1>Have you been tested for allergies?</h1>
                                            <h6></h6>

                                            <input id="question_type" type="hidden" name="question_type" value="radiogroup">
                                            <input id="step" type="hidden" name="page" value="326">

                                            <div class="radio-custom-container">
                                                <label class="custom-control custom-radio">
                                                    <input id="question25" name="question25" type="radio" value="yes_blood_tests" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Yes - blood tests</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="question25" name="question25" type="radio" value="yes_skin_prick" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Yes - skin prick tests</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="question25" name="question25" type="radio" value="none" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">No</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

<!--                                    Textarea question-->
                                    <div style="display: none" id="slide_7">
                                        <div class="ag-survey-inner textarea ag-survey-question28">
                                            <h1>And finally, is there anything further you'd like to tell us about your health?</h1>
                                            <h6></h6>

                                            <input id="question_type" type="hidden" name="question_type" value="textarea">
                                            <input id="step" type="hidden" name="page" value="330">

                                            <div class="agg-input-container">
                                                <textarea cols="20" rows="5" type="text" name="question28" value=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="survey-footer">
                                        <button class="submit agg-button agg-button--red" data-type="next" name="survey_next" type="submit" value="302">Next</button>
                                        <button class="submit back" name="survey_next" data-type="back" type="submit" value="301"><span class="icon-arrow-left"></span> back</button>
                                    </div>

<!--                                    <script>-->
<!--                                        (function ($) {-->
<!--                                            survey_question_setup();-->
<!--                                        })(jQuery);-->
<!--                                    </script>-->
                                </div>
                            </form>

                        </main>
                    </div>
                </div>
        </div>
    </b-container>
</template>

<script>

export default {
  name: 'Survey'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

.survey{
    .wrap.container{
        text-align: center;
        max-width: 860px!important;
        padding: 0 35px;
        main{
            width: 100%;
        }
        #survey{
            > .row{
                 @include media-breakpoint-up(sm) {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-flex-wrap: wrap;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    -webkit-flex-flow: row wrap;
                    flex-flow: row wrap;
                    align-content: flex-start;
                    -webkit-align-content: flex-start;
                    &::before {
                        display: block!important;
                    }
                    .checkbox-custom-container{
                        display: -webkit-box;
                        display: -webkit-flex;
                        display: -ms-flexbox;
                        display: flex;
                        -webkit-box-orient: vertical;
                        -webkit-box-direction: normal;
                        -webkit-flex-direction: column;
                        -ms-flex-direction: column;
                        flex-direction: column;
                        float: none!important;
                    }
                }
            }

            .custom-control-description{
                cursor: pointer;
            }
            h2, h1 {
                max-width: 570px;
                font-weight: 100;
                margin: 2rem auto 1.5rem auto;
                font-size: 30px;

                 @include media-breakpoint-up(md) {
                    font-size: 33px;
                }
                 @include media-breakpoint-down(sm) {
                    font-size: 25px;
                }
            }
            h6{
                font-style: italic;
            }

            select.custom-control {
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                padding-left: 15px;
                padding-right: 30px;
                //background: url("../assets/images/arrow-icon-down.svg") no-repeat center right 15px;
                background-size: 15px;
            }

            input,
            select.custom-control,
            textarea{
                width: 100%;
                height: 58px;
                border: 1px solid $survey-border;
                text-align: center;
                @extend .transition;
                transition-property: border;
                background-color: #fff;
                border-radius: 0;
                &:focus,
                &:active{
                    border: 1px solid $green;
                    box-shadow: none;
                    outline: none;
                    + button.icon-arrow-right{
                        color: $green;
                    }
                }
            }

            textarea{
                max-width: 570px;
                height: 128px;
                resize: none;
                margin: 0 auto;
                padding: 15px;
                text-align: left;
            }

            .agg-button--red{
                margin-top: 0;
                background: transparent;
                color: $l-red;
                @extend .transition;
                transition-property: background, color;
                transition-duration: 0.2s;
                &:disabled{
                    color: $white;
                    background: $survey-btn-disabled;
                    border: 1px solid $survey-btn-disabled;
                    cursor: not-allowed;
                    &:hover{
                        background: $survey-btn-disabled;
                        border: 1px solid $survey-btn-disabled;
                        cursor: not-allowed;
                        color: $white;
                    }
                    &:before{
                        display: none;
                    }
                }
                &:hover{
                    background: $l-red;
                    color: $white;
                }
                 @include media-breakpoint-down(sm) {
                    min-width: 160px;
                }
            }
            .agg-input-container{
                margin: 3rem auto 0 auto;
                max-width: 570px;
                position: relative;
                .hidden{
                    position: absolute;
                    bottom: -30px;
                    left: 50%;
                    width: 100%;
                    transform: translateX(-50%);
                    -webkit-transform: translateX(-50%);
                    -moz-transform: translateX(-50%);
                    -o-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    color: $l-red;
                }
            }
            .icon-arrow-right{
                position: absolute;
                right: 15px;
                bottom: 20px;
                z-index: 10;
                background: none;
                outline: none;
                box-shadow: none;
                border: none;
                &:disabled{
                    cursor: not-allowed;
                }
            }
        }
    }

    .agg-survey-container{
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        min-height: calc(100vh - 190px);
        padding-bottom: 100px;
        padding-top: 90px;
         @include media-breakpoint-up(md) {
            padding-bottom: 140px;
            padding-top: 120px;
        }
         @include media-breakpoint-up(sm) {
            min-height: calc(100vh - 220px);
        }
        .agg-survey-inner{
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            align-self: center;
            margin: 0 auto;
            width: 100%;
        }
    }

    #survey {
        .ag-survey-inner:nth-child(2) {
            margin-top: 0;
            padding-top: 15px;
            position: relative;
            &:after {
                content: '';
                position: absolute;
                height: 1px;
                width: 60%;
                left: 20%;
                top: 0;
                background-color: #ccc;
                z-index: 2;
            }

            h2 {
                margin: 1rem auto 0 auto;
            }

            .agg-input-container {
                margin: 0 auto;
            }
        }

        .ag-survey-inner.ag-survey-question29 {
            margin-top: 0;
            padding-top: 0;
            &:after {
                display: none;
            }
        }
    }

    //CUSTOM RADIO BUTTONS MALE/FEMALE


    .radio-custom-container{
        text-align: center;

        //CUSTOM RADIO BUTTONS >2 answers
        .custom-control.custom-radio {
            position: relative;
            width: 220px;
            height: 60px;
            margin: 1.5rem auto;
            display: table;
            float: none;
             @include media-breakpoint-up(sm) {
                float: left;
                margin: 1.5rem 1rem;
            }
            .custom-control-description{
                display: table-cell;
                padding: 5px 5px 5px 30px;
                height: 60px;
                vertical-align: middle;
            }
             @include media-breakpoint-down(sm) {
                //width: 80px;
                //height: 80px;
                //margin: 0.7rem;
            }

            [type="radio"]:not(:checked),
            [type="radio"]:checked {
                position: absolute;
                left: -9999px;
            }

            [type="radio"]:not(:checked) + span.custom-control-indicator,
            [type="radio"]:checked + span.custom-control-indicator {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                cursor: pointer;
                width: 220px;
                height: 60px;
                border: 1px solid $survey-border;
                text-align: center;
                font-weight: 300;
                color: $survey-btn-radio;
                font-size: 1rem;
                &:after,
                &:before{
                    content: '';
                    position: absolute;
                    top: 22px;
                    left: 15px;
                    width: 16px;
                    height: 16px;
                    border-radius: 50%;
                    border: 1px solid $survey-border;
                }
                &:before{
                    width: 8px;
                    height: 8px;
                    margin-left: 4px;
                    margin-top: 4px;
                    border: none;
                }
            }
            [type="radio"]:checked + span.custom-control-indicator,
            [type="radio"] + span.custom-control-indicator:hover{
                border: 1px solid $green;
                &:after{
                    border: 1px solid $green;
                }
                &:before{
                    background: $green;
                    border: 1px solid $survey-border;
                }
            }
        }


        //CUSTOM RADIO BUTTONS 2 answers
        .custom-control.custom-radio:first-child:nth-last-child(2),
        .custom-control.custom-radio:first-child:nth-last-child(2) ~ .custom-control.custom-radio{
            position: relative;
            width: 110px;
            height: 110px;
            line-height: 110px;
            display: inline-block;
            float: none;
            margin: 1.2rem 1rem;
            padding: 0;
             @include media-breakpoint-down(sm) {
                width: 80px;
                height: 80px;
                line-height: 80px;
                margin: 0.7rem;
            }

            .custom-control-description{
                display: table-cell;
                padding: 0 10px;
                height: 110px;
                width: 110px;
                line-height: 20px;
                 @include media-breakpoint-down(sm) {
                    width: 80px;
                    height: 80px;
                }
            }

            [type="radio"]:not(:checked),
            [type="radio"]:checked {
                position: absolute;
                left: -9999px;
            }

            [type="radio"]:not(:checked) + span.custom-control-indicator,
            [type="radio"]:checked + span.custom-control-indicator {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                cursor: pointer;
                width: 110px;
                height: 110px;
                border-radius: 50%;
                border: 1px solid $survey-border;
                text-align: center;
                line-height: 110px;
                font-weight: 300;
                color: $survey-btn-radio;
                font-size: 1rem;
                &:after,
                &:before{
                    display: none;
                }
                 @include media-breakpoint-down(sm) {
                    width: 80px;
                    height: 80px;
                    line-height: 80px;
                }
            }
            [type="radio"]:checked + span.custom-control-indicator,
            [type="radio"] + span.custom-control-indicator:hover{
                border: 1px solid $green;
            }
        }

    }



    //CUSTOM CHECKBOX BUTTONS

    .checkbox-custom-container{
        text-align: left;
         @include media-breakpoint-down(sm) {
            width: 100%;
            float: none;
        }

        .custom-control.custom-checkbox{
            position: relative;
            width: auto;
            height: 100%;
            padding: 12px 15px 12px 40px;
            line-height: 22px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            margin: 1.4rem 0;
            border-radius: 0;
            text-align: left;
            height: auto;
             @include media-breakpoint-up(sm) {
                padding: 12px 15px 12px 35px;
                text-align: center;
                min-height: 68px;
                align-items: center;
                vertical-align: middle;
            }
            .custom-control-description{
                 @include media-breakpoint-up(sm) {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    margin: 0 auto;
                }

            }

             @include media-breakpoint-down(md) {
                margin: 1rem;
            }

            [type="checkbox"]:not(:checked),
            [type="checkbox"]:checked {
                position: absolute;
                left: -9999px;
            }

            [type="checkbox"]:not(:checked) + span.custom-control-indicator,
            [type="checkbox"]:checked + span.custom-control-indicator {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                cursor: pointer;
                width: 100%;
                height: 100%;
                border-radius: 0;
                border: 1px solid $gray-darker;
                text-align: center;
                font-weight: 300;
                color: $survey-btn-radio;
                font-size: 1rem;
                &:before{
                    content: '';
                    position: absolute;
                    cursor: pointer;
                    border-radius: 50%;
                    border: 1px solid $gray-darker;
                    text-align: center;
                    line-height: 22px;
                    font-weight: 300;
                    color: $survey-btn-radio;
                    font-size: 1rem;
                }
            }

            [type="checkbox"]:not(:checked) + span.custom-control-indicator{
                &:before{
                    width: 20px;
                    height: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    left: 10px;
                }
            }

            [type="checkbox"]:checked + span.custom-control-indicator{
                border: 1px solid $green;
                &:before{
                    border: 1px solid $white;
                    background: $green;
                    color: $white;
                    position: absolute;
                    z-index: 12;
                    top: 50%;
                    transform: translateY(-50%);
                    left: 8px;
                    font-family: icomoon;
                    content: "\E905";
                    width: 25px;
                    height: 25px;
                    font-size: 1.6rem;
                    text-indent: -1px;
                }
            }
            [type="checkbox"]:not(:checked) + span.custom-control-indicator:hover{
                border: 1px solid $green-40;
                &:before{
                    text-indent: -1px;
                    border: 1px solid $white;
                    background: $green-40;
                    color: $white;
                    position: absolute;
                    z-index: 12;
                    top: 50%;
                    transform: translateY(-50%);
                    left: 8px;
                    font-family: icomoon;
                    content: "\E905";
                    width: 25px;
                    height: 25px;
                    font-size: 1.6rem;
                }
            }
        }
    }

    //FOOTER BUTTONS

    .survey-footer{
        z-index: 1000;
        position: fixed;
        width: 100%;
        bottom: 0;
        left: 0;
        right: 0;
        padding:2rem 0;
        background: rgba($white, 0.7);
    }

    button.back{
        position: absolute;
        left: 0;
        bottom: 2rem;
        display: block;
        margin: 0.8rem 0 0 0.8rem;
        text-align: center;
        text-transform: capitalize;
        background: none;
        border: none;
        outline: none;
        font-size: 1rem;
        float: left;
         @include media-breakpoint-up(md) {
            margin: 0.8rem 0 0 1.5rem;
        }
         @include media-breakpoint-down(sm) {
            margin: 0.8rem 0 0 0.4rem;
        }
        .icon-arrow-left{
            color: $l-red;
            font-size: 1rem;
            margin-right: 3px;
        }
    }


    .wm-survey-question-title.thankyou-note{
        max-width: 570px;
        margin: 50px auto 30px auto;
    }


}

#survey{
    &.sliding{
        .ag-survey-inner{
            opacity: 0;
            transform: translateX(-100%);
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -webkit-transition: opacity 0.4s ease, -webkit-transform 0.5s linear;
            -moz-transition: opacity 0.4s ease, -moz-transform 0.5s linear;
            -o-transition: opacity 0.4s ease, -o-transform 0.5s linear;
            transition: opacity 0.4s ease, transform 0.5s linear;
        }
    }
    &.sliding-reverse{
        .ag-survey-inner{
            opacity: 0;
            transform: translateX(100%);
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -o-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -webkit-transition: opacity 0.4s ease, -webkit-transform 0.5s linear;
            -moz-transition: opacity 0.4s ease, -moz-transform 0.5s linear;
            -o-transition: opacity 0.4s ease, -o-transform 0.5s linear;
            transition: opacity 0.4s ease, transform 0.5s linear;
        }
    }
}

</style>
