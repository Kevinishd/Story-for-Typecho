<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div>
<!-- end #body -->

<footer id="footer" role="contentinfo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
                <?php _e('Using <a target="_blank" href="http://www.typecho.org">Typecho</a> & <a target="_blank" href="https://github.com/txperl/Story-for-Typecho">Story</a>'); ?>. Write me.
                
     </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 2">
             <a title="萌ICP备" href="https://icp.gov.moe/?keyword=20222190" target="_blank">
<img alt="Static Badge" src="https://img.shields.io/badge/20222190%E5%8F%B7-e77c8e?style=flat&logo=data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAAXNSR0IArs4c6QAAAARzQklUCAgICHwIZIgAABHOSURBVHic7ZtpmFTF1cd%2FdXuf6VmYnhlAdiQsGkEWAQEVNb4KGsW8btGAxo1FFAIuBAyLa1BQUFGRqCB5RY3mSWIUI0beyCaLgKjI4gayjszWPT3T6618OLfn9gzTyMCgXzzP00%2FfW1Vd95z%2FPVudqoaf6Cf6iX4M0lo79P%2Fvv09vLL1fa%2B34sfhw%2FtAP1Fo7uHf1dJo9kk9F6U2goUXLfP3g2kom952mlEr%2BkPyoH%2BIhWmtlzv9slvHEyuZs%2FdLA5R5GtseHw5ABCRPC0RoS8b%2BZvbuYxvhBB%2FlN5zuVUvpE83bCANBaK5bufdR8%2FINWxrJPweBi%2FJ4cXA5QKjXI4iLtPpaAUDQEjre4rCdMHLSPs4pPGBhNDoD%2BtPI%2Bc87KLsaijyBecxHZ7ly8LutpSoQ0NVTHIJqQdq8LfC4wlD1GA5E4VEeD%2BHLe4Za%2BmOPP2u3o6L2rKfltMgCS01fPMOatPoXvDg7G6ys8XCANkQRUR9HZOaiRA9B3D0JVJ9AzP0C9sBbi1ZDtITNgkUratllmjh2w1XF3n2lNwfdxAaBf%2BHwqT67qwaYd4HSdhd9ThMM4XKWrYqANuKIPjD8TPbAYhbzkdAb0u3tRc1fD25vBQMBw1zOZRBKqYt%2BRTKzQA09F3T7wY3XNyfcdqwyNBkC%2Ft28cc1cP5s2PQDEAv6cYt%2FNwJqvjEI9D%2F1Pg9n5wbRdb4J1hmLsG5q0Evxs9eiBq3JnQyi1TAOpPW%2BHJ1bBlJ7jdkOXmMHCjCaiKlIBztb66L%2BqO%2Fh%2BpgcUPNDkA%2BovqsfrxlReoBWshFu5JlqcNXpf8Ol1Na2IQiUKrVujb%2B6PG9wWPNUkUmLse5q6CfQfAcECXIthZKqYSi8HJbWD8IPTYHrXM6QoNj61GzVsNZYfA5xV%2FoeqZV00camIHycldy%2BgB%2F1aPDH7iuAHQL24dw6R3hnLwwGl4PW3xuTM5KvBmw0390BPOgo5eW8Vf3oF%2BfBVqwzZwWW9SKaioAv1HGPZ%2FsHQH5LghnoRwDJIJOOc09PgBqGEdhBeAT4Lw2ErU4vWQjEK2uwF%2FYUJ17FuisS20bQNP%2FHKpGtZ%2B3rEBkDvzGczqUXhch9t1OAamQl%2FaEzV%2BAJzb0mZ05UHUnDXwxkZQSfC7wW3lXKVhwICnfwmj%2B0FlBNo8AqFqyMsGlyNNvaNguOG6vjC%2BP%2FQqqDUj%2Fc%2FdqLmr4L0t4HAIGPVDbHUU2rWer7aNHHVsADD5GQJZo2rRDUUgFkP37Iy6YyD6hq61E%2BhdNai5a2HBGqgKQpYHvE5bVQEOheG7yVCY3fADT5kL%2B4IiSEqIWvWOQkEARg9EjzsDVeSyAX96C%2BrJNbDtK%2FB6BQylRBvCzFfRPzQeAP1F9V10um8iAX9zAEIR9F1DUJMGoP21CMGcjahp70HoIHiyRcWNNKHTKZqAkwtg09jD%2B55dB6P%2FAQFfw7%2FVGpKmhMNYHN2tPWrcIPTIn9svoSSBmr4cFq4UPgBKQ%2FMVMzMCYGTqYHtJezCa1779uAP1wADwg3r9S9SgxSjjHtSEl2DDjXBZLzAzzibkccLm%2FTBlWd32kjCMfiWz8CDtTgfkeMHnRX2%2BG8YsQanfw4WvwNI9UOxEP32BaEvqN3C53lw2qfEAfFMOTosZU0OLPAD0W7vgyqdgw07pCxRB50J449fQKhdiSYibdppbnxwGdGxWt604G3BlZAWQ9UJ5DZSGYEhnKJkifAX8sGobDH0UtlSINrj9aWm2o9j8urxtowEwvw2CYXUnTWhdIPPtqQS80LcNfD0JDk2xBfv6TqiaJgIlMwCgEB%2Fw0iZwT4URr4tpeLxHFr6FH16%2BCuZcCm9cC0XZQAwqo1Yk8Fu8AYU5Ak6Kr92VGafOuBw29lWBI00Dii3HdaAKnE74aF%2FD6jr5XfiqHAp8DU%2Bc74MrXpZrvwde%2FxQWb4RAdmb1dyjYfgiuOq1uu54Fs1bAve%2BBQ6H3BiVCtMhGfWEJbSiM76oyiXkEEyivEmcGYGp0sQikS6rAaYDHAe0byEAfXg55nsPb0ynfJx%2BnIR670J9ZeJA%2BtwOufe3wvlyvvCBDoUrCMrwwRyIAiAyHqjNOnRmAYMRmytSoPAFAVVRLu8Ogjt2W1cj30G7iA5qa4kkY1q1u221vwsjXIc8rglZEpD3HYztkBQQTGafNXBGqTthBUgM%2BK6xUJW3YDDes%2FAb%2BdwmUlMKlp8PBKtt5NiVpoFMAHlslWjPyDPj0APgt01Sqdnmt%2FU5UWq3BrM5sApkBqF%2BYSgkVT3NuBT4453lJYwPN4P2vZJzzBJT4AlnQ52nxB4k4rP0WdlWAK02JLd5UepsCzMyKnhmAw16ibrg93dl5T3CJMZBlseKFVz8RP%2BSoJyygta7HZuYyY2aOnfUmjlvXblWLxY9GSkFWvbxBa3CltDS9HXBlzjEyA%2BB32YIqhQ7XCKq5bjvJCEUlR8hvIOTFkhCsgYJsO5rUp0hC6gam9YZSixp3AyYUikI0mkEKl5iGT6KPCkbtZ2qN4c%2FKKGZmAPJ8djKhQJXJw3WBH2VqYejus%2BC05nD1q7Z6poTvWADv3witZtr1vhSZGspCMOhkGNsferWEhIb1e2DmCth6oG5eEIrCXWfB%2Fb9omNclH8O1f4YCAUBX1KBqIxiQm9knZQTALM7CSM%2BmSsSTqpZZIkA8Ab%2FtDR2awfDXRRNS9hiKwtRzoZkPep8EHx%2BQdQBIfC4Lw39Gwtkd6j60WxGM6AmLN8GIVyCQa3n3JAxuL2O%2BrbQSNEvALJcV%2FjScJOk6B9NzGBMKcxsPAK2biVAgk%2B0JAqBb5aGSGjChtfXAG3vDix9JZqc16CRcfor0dSyQrNGD9JWFYOtE6FYMH%2B%2BH6%2F4Cn%2B0Vgfq1h79eB8N7SoIzbBEEcmSeqGUmbe9D8o80jXK5ADe0E0HVgZCdxSY1tPOTiTLHh%2Fb5dj7vMGB3qVx3LbZs1mGHoFF9IRKT60gCLk5LWH4WkFwepDg64RwR%2Fp0dcPos2F0hbzqQA58ehFYzYMchuKwbDD1F5ksntx8KciTfT31yPfJCfhYQt1VeKesYDZhmjPZFkUYDYHQtimAmRSpDQVg0QHUvAJKy8gMIRqF7C8jxicaEYzCmnz1R5yJbk6IRmD1Uroc8DwUFYhqpoonPBXl50PMpGfPoRRCu5%2FjiSfExsYT9SZqAC1q4Ufvj2GFAA%2BafOaf57xsNAL0LJoNejNa2M9pcJtrnzJGsDODOpfJ9Ux8IxwEThnYRO%2F6qDLoWih0mTGhhLYOf3wDK1XB0cDmklLXiGzilWMBOj7udC6WocnJAPp0Lpb2d1G30xn2grNKYBnDFlVIZwscRAFBKRcnKj9dGAqcTvXq3XPdoDe0s%2B3%2F1E6nd3d4fYlVwRXdpX7BBlqFdCgUUU0NLy54%2F%2F84uezXIlRO%2BsEwuL6cuANvGw%2BaxsPE2%2BawfA%2BV%2FEDAAtXqXPXcyCe1bZH4O37c73LsVbPpKfIDbgVr%2BNYw5HQZ3AI9l88EgPL1OQiJuuOUMaV%2BxFXb1kbEgPqva%2Bk0gyw6xDZFpygIHoLKGOg5vzmrxPSmtdDvg7e1w%2Balyv%2FwbyRBBTOXMtvDNMQJgnt8RY%2B1OKTh4HPCuVQUa2hl2fGuN0rBgvQBwaz%2F4n07w1nbAYb%2FFolxZIW4%2FKPfX9oDJ%2FwTtOXwZrDUQg1%2BdKkkSybps%2Fu7vYKSZjwaSYXjuGqkYr9kJBRZ40USUc9tXsySzjJl9AGBc3LWSWCyM1uJVg4dgfwLOOwkGdIIDIcAFXxyEsmqYP0x%2B%2BOw6UF7Y9p3cnxwQR2U44bVPoF0%2BXNVbSuTppTOtoTQIM4bI%2FawVsiuUTm6vXU%2FI90nJvWUbKHSg1pYCCQFHazBjL3PLafccUcYjddInMAXcS2odocsjpSyA7gEJWxjS%2Fsw6%2B3f%2F%2FEwY23FI7js2EyeY54Ub3pC2V6%2BBEb2gtELK5YfCcn3vBTD1PAl%2F05ZJbpFOsRqpPZRVy6cyCMP7SN%2BfN4HXAixpQl5hQikV5wh0RBNQSiX1kNdMPvhM6gFZLpi%2FFu6x7HxHqSyaslxiBlMGw5vbZFqXIf0gjjCVKRoKOj8GOybAoitEa5bukPGXdLUfftIfITfLVvVUYrPwGmsDxBoXScBl3UX9F66XUJpqH94PFhxJwqM5InNz73KWbqrC5%2FbjdMDXe%2BDrKHTwwKZ9AoDTgL0hmPQvWLIF8r2iMRGrFNU6z3bkPhfsC0HWdHj%2Bcvh1DztrBJj3IYx9UzLB1KLIoSSJAri%2BV4NsqhUlsiETsCrCkUiYm3uVfx8A31u60VobqKkLKHDfiGFIYnJlP1g0FP3UFtTtr0hNT2txWh6nvZROmlIjqIiIlqQ7vKQpFV0zBs1yxElWhcHpFuHTcwStJeFqnQuxtHJbSQj%2BfisMaYM%2Bfwlq7XbR1EQStPtFKu65WSl1xPrckX0AoJQyuWngIcLRECAPeGmV9I3tLpuiyaQIl%2B2uW0dwGKKK9YVP9RX4JA0GMYFArji2%2BgmSUpLultdIphmOQUW1ZJJD2kBJAvX%2Bx%2FZGaVWsigmDD32f8EcFAAB%2FunAS0egbEg2UhMSx70vfC1dDeT1vXl%2FQ76v4OoyjG%2Bd0CMAOBeFqeP066bvlTdmLTO1iJZJvMLXfEb1%2Fio4KAKWU5tyeJURiogV%2BD8x7F0LArztBtw72eZ8fgqpjcF5PGFQshy3%2BsSataBsJMWJQydEeqjrq8q3WWqHuXkggb4Q4uBi6WzvUut%2BigxqVNwUKsuzdpBNFSRMqEmhzujDf%2FkkoL5ftd62hNLwY%2FdD1RwvAUXOrlNLmVYN2EYqWAeBxodZvR7%2BwDZWr0K%2FeBGXBzKbQFKQ1lAdh1VgRfvoa2L3fPntQURM0J160qzFH6hpdwNfc%2BxIFnuEYhlXaCqMPzIDmLtTED%2BCxt2VtfyR7PhbSGkor0HOHo%2B7oDlsqocdDdtUokYSo8ZaqufeSxkzbeH39y43fUBasrHWIeV5Up1nSN%2Fts9PWDZAe3KTXBEp7JvxLhI0CP2RI%2BU46vIlhpLh%2F1RWOnbjQA6sqOU7m0%2F4tU1lQA4HKCjqJazZH%2BhZfAhKFQWmnvzx0PJU0R%2FrHfwINnyo5X8cOQ65TIIXZfwdghCx39C8c3Wp5j5Uu3fHwOoYrr8brzASli5DeDvRYPr30JVz8vESNV9WnUA6yjMdVJWD4WBjeHKOjih1FmzI75oWgFXVovUltubbTwcLwHJZ0z5pDFDbidUh2piQFu2HkXtHRBhQl958POXdDMX3cXJ%2BOk1lGYiio4oxt8eIPo6WchOG0W5DhspxeJVuLOXqTK7hl3rDIcV8xSiWnjCSYWEUvIZrzPDc4EnDQVFmyFfAN2jEYvvAFCVjk8kWzYP6QOWJaG0QkH%2Bm9jYN0NaAN4aD38%2FAHId9YVPul56XiEhyY6K6y99z2II3krXlehnM6S8rfu3Rm1%2FEawKmHM2QxT34FQpRyD9bgAbZ81LCpCz7wYfmudPtsThfNegJ27ZZGTcnjhSCnZOc%2Bp0nsmHy%2FvTRardIcnHmTX%2FpE0yw7UMhpNQFUNjLoAnjlfxgEs24uauwbe2gw40Ff2gt8NgDOLhKkw6JvfRL2yEnKyLKCwHF5VKb1%2BNl9tvGlKU%2FDdpME6OfztB4zFy0fRLCeAI%2B2sX1VUNjZGDETffz6qbcMnSPTnIbj336i%2Ffij7fKlTpSDmUREMMvHSp9Tss5tEeGhiAAD0vw88wJD5XUnGLiDfl1v35GYMaqLoTm1RY%2Fqhb%2BkNNUnUcxvg2Q9hz37ISjsLDBJKy2uC5OYs4z9jdqvT8yY0Jb8n4CiH9ReZce%2FPNp5Y1hqP60L8nrpAxK3T5AlrAeVyytt2GnUPQIeiQeLmv5j%2Byz1M6z%2FxRPxr5IQAkCKttWLE27NZvOIknI6h%2BD05hx15h7r3SROCkRCmepvbBu%2FnqV9MOJH%2FHTqhAKRIa63MGR%2FONh7%2FoAWVpZfg9ebgc9Y9h1gTh2ikhubN%2F85d5%2B5nYq8T8sbr0w8CQIq01op1h2abz28oMl752CBYdjGYb1HY0uTa0zFv7VNpnJo77of%2B69yPQlprh%2F6yatKP%2BafJn%2Bgn%2Bon4L4cd%2F2hQhc%2BBAAAAAElFTkSuQmCC&logoSize=auto&label=%E8%90%8CICP%E5%A4%87&labelColor=282726">
</a>

<a href="https://travel.moe/go.html?travel=on" title="异次元之旅-跃迁-我们一起去萌站成员的星球旅行吧！" target="_blank">
<img alt="Static Badge" src="https://img.shields.io/badge/%E5%BC%82%E6%AC%A1%E5%85%83%E4%B9%8B%E6%97%85-e77c8e?style=flat&logo=data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAABGdBTUEAALGPC%2FxhBQAACklpQ0NQc1JHQiBJRUM2MTk2Ni0yLjEAAEiJnVN3WJP3Fj7f92UPVkLY8LGXbIEAIiOsCMgQWaIQkgBhhBASQMWFiApWFBURnEhVxILVCkidiOKgKLhnQYqIWotVXDjuH9yntX167%2B3t%2B9f7vOec5%2FzOec8PgBESJpHmomoAOVKFPDrYH49PSMTJvYACFUjgBCAQ5svCZwXFAADwA3l4fnSwP%2FwBr28AAgBw1S4kEsfh%2F4O6UCZXACCRAOAiEucLAZBSAMguVMgUAMgYALBTs2QKAJQAAGx5fEIiAKoNAOz0ST4FANipk9wXANiiHKkIAI0BAJkoRyQCQLsAYFWBUiwCwMIAoKxAIi4EwK4BgFm2MkcCgL0FAHaOWJAPQGAAgJlCLMwAIDgCAEMeE80DIEwDoDDSv%2BCpX3CFuEgBAMDLlc2XS9IzFLiV0Bp38vDg4iHiwmyxQmEXKRBmCeQinJebIxNI5wNMzgwAABr50cH%2BOD%2BQ5%2Bbk4eZm52zv9MWi%2FmvwbyI%2BIfHf%2FryMAgQAEE7P79pf5eXWA3DHAbB1v2upWwDaVgBo3%2FldM9sJoFoK0Hr5i3k4%2FEAenqFQyDwdHAoLC%2B0lYqG9MOOLPv8z4W%2Fgi372%2FEAe%2Ftt68ABxmkCZrcCjg%2F1xYW52rlKO58sEQjFu9%2Bcj%2FseFf%2F2OKdHiNLFcLBWK8ViJuFAiTcd5uVKRRCHJleIS6X8y8R%2BW%2FQmTdw0ArIZPwE62B7XLbMB%2B7gECiw5Y0nYAQH7zLYwaC5EAEGc0Mnn3AACTv%2FmPQCsBAM2XpOMAALzoGFyolBdMxggAAESggSqwQQcMwRSswA6cwR28wBcCYQZEQAwkwDwQQgbkgBwKoRiWQRlUwDrYBLWwAxqgEZrhELTBMTgN5%2BASXIHrcBcGYBiewhi8hgkEQcgIE2EhOogRYo7YIs4IF5mOBCJhSDSSgKQg6YgUUSLFyHKkAqlCapFdSCPyLXIUOY1cQPqQ28ggMor8irxHMZSBslED1AJ1QLmoHxqKxqBz0XQ0D12AlqJr0Rq0Hj2AtqKn0UvodXQAfYqOY4DRMQ5mjNlhXIyHRWCJWBomxxZj5Vg1Vo81Yx1YN3YVG8CeYe8IJAKLgBPsCF6EEMJsgpCQR1hMWEOoJewjtBK6CFcJg4Qxwicik6hPtCV6EvnEeGI6sZBYRqwm7iEeIZ4lXicOE1%2BTSCQOyZLkTgohJZAySQtJa0jbSC2kU6Q%2B0hBpnEwm65Btyd7kCLKArCCXkbeQD5BPkvvJw%2BS3FDrFiOJMCaIkUqSUEko1ZT%2FlBKWfMkKZoKpRzame1AiqiDqfWkltoHZQL1OHqRM0dZolzZsWQ8ukLaPV0JppZ2n3aC%2FpdLoJ3YMeRZfQl9Jr6Afp5%2BmD9HcMDYYNg8dIYigZaxl7GacYtxkvmUymBdOXmchUMNcyG5lnmA%2BYb1VYKvYqfBWRyhKVOpVWlX6V56pUVXNVP9V5qgtUq1UPq15WfaZGVbNQ46kJ1Bar1akdVbupNq7OUndSj1DPUV%2Bjvl%2F9gvpjDbKGhUaghkijVGO3xhmNIRbGMmXxWELWclYD6yxrmE1iW7L57Ex2Bfsbdi97TFNDc6pmrGaRZp3mcc0BDsax4PA52ZxKziHODc57LQMtPy2x1mqtZq1%2BrTfaetq%2B2mLtcu0W7eva73VwnUCdLJ31Om0693UJuja6UbqFutt1z%2Bo%2B02PreekJ9cr1Dund0Uf1bfSj9Rfq79bv0R83MDQINpAZbDE4Y%2FDMkGPoa5hpuNHwhOGoEctoupHEaKPRSaMnuCbuh2fjNXgXPmasbxxirDTeZdxrPGFiaTLbpMSkxeS%2BKc2Ua5pmutG003TMzMgs3KzYrMnsjjnVnGueYb7ZvNv8jYWlRZzFSos2i8eW2pZ8ywWWTZb3rJhWPlZ5VvVW16xJ1lzrLOtt1ldsUBtXmwybOpvLtqitm63Edptt3xTiFI8p0in1U27aMez87ArsmuwG7Tn2YfYl9m32zx3MHBId1jt0O3xydHXMdmxwvOuk4TTDqcSpw%2BlXZxtnoXOd8zUXpkuQyxKXdpcXU22niqdun3rLleUa7rrStdP1o5u7m9yt2W3U3cw9xX2r%2B00umxvJXcM970H08PdY4nHM452nm6fC85DnL152Xlle%2B70eT7OcJp7WMG3I28Rb4L3Le2A6Pj1l%2Bs7pAz7GPgKfep%2BHvqa%2BIt89viN%2B1n6Zfgf8nvs7%2Bsv9j%2Fi%2F4XnyFvFOBWABwQHlAb2BGoGzA2sDHwSZBKUHNQWNBbsGLww%2BFUIMCQ1ZH3KTb8AX8hv5YzPcZyya0RXKCJ0VWhv6MMwmTB7WEY6GzwjfEH5vpvlM6cy2CIjgR2yIuB9pGZkX%2BX0UKSoyqi7qUbRTdHF09yzWrORZ%2B2e9jvGPqYy5O9tqtnJ2Z6xqbFJsY%2BybuIC4qriBeIf4RfGXEnQTJAntieTE2MQ9ieNzAudsmjOc5JpUlnRjruXcorkX5unOy553PFk1WZB8OIWYEpeyP%2BWDIEJQLxhP5aduTR0T8oSbhU9FvqKNolGxt7hKPJLmnVaV9jjdO31D%2BmiGT0Z1xjMJT1IreZEZkrkj801WRNberM%2FZcdktOZSclJyjUg1plrQr1zC3KLdPZisrkw3keeZtyhuTh8r35CP5c%2FPbFWyFTNGjtFKuUA4WTC%2BoK3hbGFt4uEi9SFrUM99m%2Fur5IwuCFny9kLBQuLCz2Lh4WfHgIr9FuxYji1MXdy4xXVK6ZHhp8NJ9y2jLspb9UOJYUlXyannc8o5Sg9KlpUMrglc0lamUycturvRauWMVYZVkVe9ql9VbVn8qF5VfrHCsqK74sEa45uJXTl%2FVfPV5bdra3kq3yu3rSOuk626s91m%2Fr0q9akHV0IbwDa0b8Y3lG19tSt50oXpq9Y7NtM3KzQM1YTXtW8y2rNvyoTaj9nqdf13LVv2tq7e%2B2Sba1r%2Fdd3vzDoMdFTve75TsvLUreFdrvUV99W7S7oLdjxpiG7q%2F5n7duEd3T8Wej3ulewf2Re%2FranRvbNyvv7%2ByCW1SNo0eSDpw5ZuAb9qb7Zp3tXBaKg7CQeXBJ9%2BmfHvjUOihzsPcw83fmX%2B39QjrSHkr0jq%2Fdawto22gPaG97%2BiMo50dXh1Hvrf%2Ffu8x42N1xzWPV56gnSg98fnkgpPjp2Snnp1OPz3Umdx590z8mWtdUV29Z0PPnj8XdO5Mt1%2F3yfPe549d8Lxw9CL3Ytslt0utPa49R35w%2FeFIr1tv62X3y%2B1XPK509E3rO9Hv03%2F6asDVc9f41y5dn3m978bsG7duJt0cuCW69fh29u0XdwruTNxdeo94r%2Fy%2B2v3qB%2FoP6n%2B0%2FrFlwG3g%2BGDAYM%2FDWQ%2FvDgmHnv6U%2F9OH4dJHzEfVI0YjjY%2BdHx8bDRq98mTOk%2BGnsqcTz8p%2BVv9563Or59%2F94vtLz1j82PAL%2BYvPv655qfNy76uprzrHI8cfvM55PfGm%2FK3O233vuO%2B638e9H5ko%2FED%2BUPPR%2BmPHp9BP9z7nfP78L%2FeE8%2FstRzjPAAAAIGNIUk0AAHomAACAhAAA%2BgAAAIDoAAB1MAAA6mAAADqYAAAXcJy6UTwAAAMAUExURUxpcfX19QAAAAAAAPT09AQEBAAAAPLy8vDw8QAAAPX19QAAAD8%2FP%2Brq6h0dHQAAAGpqarS0tAAAAAkJCfLy8iAgIO3t7fn6%2BfPz82JiYvPz8%2B3t7fPz8%2Bbm5igoKFFRUfHx8QAAAPPz8%2B7u7u%2Fv7wAAAPT09La2tgAAAPPz8%2FT09C4uLlxcXLm5uYCAgI6OjuHh4X19fdjY2PHx8fHx8dnZ2fPz8%2FLy8vb29jc3N7%2B%2Fv%2FPz8%2FPz82tra%2FDw8PPz87W1tfHx8fLy8tDQ0Pj4%2BPHx8fHx8REREaWlpaOjo35%2Bfs3NzYeHhwICAunp6dfX1%2FHx8fPz883NzTw8PJ2dnfPz852dnYGBgRgYGLc6Ov90dP94eP92dvPz8%2F%2F%2F%2F%2F94dLU4N%2F39%2B%2Fv7%2Bf92dPtycrM4OLE1Nfn6%2BK80NP7%2B%2Ffz9%2Bvj49%2FLy8v%2F%2F%2B7M2NtRRUbo8PMJCQsxLS%2Fdtbf10dOJcXO5mZsZFRbo6Ob87OfRqaikpZNBNTfb19d1YWMLAz7o4N0tJezIzbEBAde9oaPlwcOtkZD0xZywrZuliYmpCbOHg5jMsZTY1beBaWjg4cZFPbr1AQOltdLw%2BPS8tZ%2BdeXlc6Z0k2aVBPgL9AQPdxc744Nefn69XU3bU6OtlWVjAwatnY4Dw7cthUVKtDSllXhWM4Xv9ycczJ1MlISOXl6bOxxISAop2ZsqRWb74%2BPb1gc5GNqnZHbHNwllE4adlQTlc%2FbfFqapaTr5JJXf96eOzr7d1qdGJfi8bF0UQxY7E9QfFoaMfF0%2BNsdIB8n4NKa25Ea%2FFwdHt4nGpokb9CQsNEREZGebNDSKNEUK9YbYZIYfX188dISGBCbKupvkg%2FccVicjcwZ%2FdpZntKb448UPtxccXD0bdCQ3E9Xrm3x3Bsk%2F97eYpOcDYtZc%2FO2a%2BswKKet9Vnc85mc5WRrWpmj59NX4qIps1kcsZNUEszYl5ciUI6btHP2YVGXmxokcNaZnZ0m6mlu7tESF5ei7NQXlIyXJdScLc4Orm1x6s4PBAtR%2BAAAABZdFJOUwBoRwI7NBSm%2FhsODnzxZQqfxCpa90D4%2FsiW7vTj7VZ0BBwiXlUmusoufZ10jM6Sp%2Bmk5jTfbZKI%2BlHNREY9OK9dly3jFuViHrm5q9mjChjn1cHdXqmfr6saz%2FCKHwAAAAlwSFlzAAALEwAACxMBAJqcGAAAChRJREFUWIXt11lMXNcZB%2FD%2FPTMDs8GMGfCwmM2AYYB4Ywm5Dsbb2M5ix2kcEtuxq6S1ozZO0qR9cfMSRWry1CpVqqhSmjZqo9ZNvCiOncTBBBPwhglgBgwY5jIDHmCGYfYz6517%2BmDHBi%2Bpqj5V6vd0Hs756fu%2Bc74rXeD%2F8V%2BH7PZyA%2FFxpdWzif8M4L5f1Cz1lQM4JhUoesMAoM7OPVcftDYsds%2FE8%2FQn%2Fh1Qqm%2FY%2F34cKoMXhzOKpDPyssUpvc9%2Bv%2Bvww9eGioUfAmqcO9iBvjVY%2FFVrXB3QHUkPeZ5OFxMMWiCkiqoybLqL4WviPYAbPSgS9rBViWH7NS0pDG8WUNV2sEL54c%2BlnxqeSzHtbiykM1IiwzQR56T7ZLBB1oDaZWd18O05Tson9Mcj%2F%2FhIseQrwjJCgDYRytonXOphBu%2Bx%2FLQz9wRKHgk32Rbv7LzOc2RqCHszcaovf1q35NET1aDjE%2FWekkv2qgzD79VwfH5HHTdK8NXLnrEbpq94r0bjedqVx61ts7%2FqeCFFeNc3OOhZ92nKrMjLhm1ksSBPTyOeewCbDeG1c6TH6veX9gvWB%2BXO6KZcz%2B%2B6p%2BVPOMOu%2FsdPzAy38SrpGn37iCx1tGLqboDLkj1FrJsdftDKLp%2Fj%2Bk%2BE4J%2FBbe8W%2B91149qRUFKSqj99xM86GovHCy9XOdmdQPV3D3hU1clomFIBWH3F8%2BgfH%2BpdfYxjDMrmDmUQQF9q98Z6ddd2V3hta63tTmA2Zcns7rM5Qr4AAIJqUWVrsuhqwSwAd7hcud4CQJRGOh4qP7w5IKy4uGLiFkAAAGGTLv4ekfHXzEazEVDZ3%2BBenIt6VATgLIqhgIoAQCQR6X7wRMWuI%2BuTz96RAfLaNzZu%2FkRr76ECT%2Fns2bRQ66urOvVBgHGOjW2NVo4BQN%2BmMblLH0vXWpx3AHMbwoLoX%2FmgtZ72U6HEOBdk7baV6jQ3wMQ6MmCaIjeF3IzR%2BnFpMDW8oASEqY7T7%2F16DC1OAC0XyJuEm%2BIs21UcwD6ms%2Frl7MbOjySRxYuxfr1mYQaYtlYN7bQ6m61KnlI0ZZ4OMm467XyjlWMgrryxJTrXjY2Dc%2Bbx3ecV35RdXwgkcttqK3uj7h6%2Bhad8i2uvnTLxSXK5bkMfGAkVCHnpbsIASKFqb3uVtZBzxhYAcsXB99YFi7%2FTWhf1UwHxAVmEYxZDeVxwA4xLre8uFQMAAFX3z4ZybGLSEV4AlE9XvHp1a8oma2J5CeUpn29ZMwni4oRmGwUYpfVdSxEkDBAVW%2Fqa%2FdcN4yE2D1AvO9azYnby5JlfXNXD2EIFQbutzMK4VHJZUegGGKV1A1KpkzCAdWQ5bP6EV%2BmbB%2BRn2XasKVv%2FebItNTg8bOQFxK02SWS0SAynxESA0dFcT3nGNAAVGtwrBpPTgjTvGnM7IlO%2FHQttJdgc2a91wgisDDZxRKrjdG5NDgEkIuj7hw2VHImITU8kNJqlObJ5GUzukkmP2weGfaw%2FFInxLRQQmqRokPTS7Wu6iI4yMC5YnIg%2BZwsQkm8PyHxtMil2C5DVLY2%2Fc8Tc1OEl2dRpUpaUUArBJSt1EmYJlF7nmAgw4srkOklO5M2Lk3VbPo9zzuQtgOmKUxOy6t%2FsCLgDjEwHstEPIM5LehfgVifCabV2gGFHT07Mf%2FBo94FWMmbsbbDeLiFQwz33ZbL47wgC3L4%2Bv7WJ8pQKviUIEvZ6ujP0ZLGFMPQlPYtknZN7ZueGI8HBuOd2E%2BHHReBcsLmSg%2FRRhHv5wvIWJxAa2GliOFQpqt83VDECSJyD6F77NHT7DX0P6JCaVugo%2BSAXALgZx%2F4LZqPZiNAHm%2FM4cmgmkPpxdk02B0hsxvzPggbcipslrF1Mdzsje1SKoUI3wGAJNH%2FmFXjKDw%2BU6l2Eibr8joBe%2BUYbA%2BujvixZ9pDaqnTfzmAGYHO1v%2F54NuxREQBc%2FZFqrbHF2YLQgIYHYTNPPXDA%2FexhcACULxWPU%2FQa5mew2iAWjmWq7dGXO3M8hIH1Bwy5jibKU37YF8z2grW5bORSeaDITRhn6luVHGv3aeY1MXpYcSnrSlQeOaEuqmIAJG5VVANni7MFIVpkqOQk7hWFLhgz80puTy7VtCvrydJ5TdQ%2FLLfv8xWADSkubip8B4D01%2F6coNZsNAMhhLeZOByaNi%2FL%2FKDvlarLX4cLwrRH0TavhFhvqVQR5DtEEtR1N5x1A%2BA4p%2BGpz7wCjFRo%2BiKbaUPclX6%2Fac%2Bfpt7uX6dpIwaL5vZThk9qTJBJWaozSZh29Mb8cZzz%2Bt6BOHgBQti3ylngZhycPdWkqEo1Yjk1KsXYvHdQPJLoqRpYAhUit%2BYP3EtfH9CaW4xmI0IQ0zYWgnGRx6PDf1EcV5aStOT8L5JXaWI1NinbzkC3T4RvzB9rdZduOtrUL1BACJsuVJbFEslzb31VfH4mpukTFwBY1r62lkzLPAoRu0Zvzh8Aizw53FRCeUohNHVNLnvGkeYjy5MOxQUuiAWAbK6yc7GXPV8wIra61Yno4lw3AMCuqmkpMbZQAEI8XnGU%2BjzbTtZYoqGYfyHg4yYK597qUGu6JeD19IfP1UT9hAEIjedNG0tKKE95SoV4PJmJks7932ZYmqwLAEiV36w%2B0jhUjE19aN31oWJ0V8hFGAAuWOwYze8XqEABAErvQxFPhA6YhhYCMFWlS1nbT5WNOSW07pR7uiZrWQgAI4%2BMyrJdi%2FgbSYDqUNNeMLnaEkwsBIQxMWPK9fxR%2BdYVI2KfXacMBFKetBAG1kfDsVJHvrGFCjzlBaUqw9V0IdaV614IgFONFgYnf3kxIzYbTU3QQyP7uki23k0YCBdc71naRc20nwqgslxX5og8Y9J%2FB8A8FZfXCbrH2ubMT3%2BhSDkdDJhS%2BjmtKHIc5M3uZm%2FWjB1GnvIejTe7vPuCXxlbCABTVSdrByoS6tkB42ttcmw9rhQrxwxZB9OC%2B8Zqld%2BtKVsScghU0L1W%2FS3n2PVlLHkngCl%2B1DAwLt%2FZjt6shhcCmu5kWGf7w2nTj07XfuJeflJXAINct4ib6UmnY%2B8WrrDeBcBW1lmU9HdU5fzYHi20T75Ybq5MM2X%2BzTlTU3s%2BWdMZqTHk1ucr6waqz8ipNOO7G8DEDovTkLTb3DbTVKCudbjP5hpBRUK%2FKTTjsOz3tLtcGUjXTNd3hGwur3gPAAPOZF5HoXjdPzgh2yKNs1h5MnlSGH5AHlNEv30s2pgpXoun1L8DaWYyJTHvj2V%2BaJYbWOvzFDJoEQKgCkF2qlRvbbbLAfUT3kB7OoKzXWQW9wGAbRfV%2BmhF9w6JAprewfqeNWdJyKAOaNcDGgqd%2F%2FSq8yEVvT8AyAqu53BpcxFAZbARhVdWZI9ji1awFc%2FGFFn2vGmv%2BUzyfodvEjJdypaMigpFRtmWFN3NZm1TFFRptVUGokj54dM%2FENtSireoNHd3%2F382%2FgW%2BEwEdPAnCzwAAAABJRU5ErkJggg%3D%3D&logoSize=auto&labelColor=282726">
</a>
            </div>
        </div>
    </div>
</footer>

<script src="<?php $this->options->themeUrl('assert/js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assert/js/prism.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assert/js/zoom-vanilla.min.js'); ?>"></script>
<script>
    <?php if ($GLOBALS['isAutoNav'] == 'on') : ?>
        var b = document.getElementsByClassName('b');
        var w = document.getElementsByClassName('w');
        var menupgMargin = (b.length + w.length) * 28;
        var srhboxMargin = (b.length + w.length + 3) * 28;
        var menusrhWidth = (b.length + w.length - 1) * 28;
        document.getElementById('menu-page').style['margin-left'] = menupgMargin + 'px';
        document.getElementById('search-box').style['margin-left'] = srhboxMargin + 'px';
        document.getElementById('menu-search').style['width'] = menusrhWidth + 'px';
        if (menusrhWidth < 140) {
            document.getElementById('menu-search').setAttribute('placeholder', 'Search~');
        }
    <?php endif; ?>

    $(document).ready(function() {
        if (window.location.hash != '') {
            var i = window.location.hash.indexOf('#comment');
            var ii = window.location.hash.indexOf('#respond-post');
            if (i != -1 || ii != -1) {
                document.getElementById('btn-comments').innerText = 'hide comments';
                document.getElementById('comments').style.display = 'block';
                footerPosition();
            }
        }
    });

    function isMenu() {
        if (document.getElementById('menu-1').style.display == 'inline') {
            $('#search-box').fadeOut(200);
            $('#menu-page').fadeOut(200);
            $('#menu-1').fadeOut(500);
            $('#menu-2').fadeOut(400);
            $('#menu-3').fadeOut(300);
        } else {
            $('#menu-1').fadeIn(150);
            $('#menu-2').fadeIn(150);
            $('#menu-3').fadeIn(150);
        }
    }

    function isMenu1() {
        if (document.getElementById('menu-page').style.display == 'block') {
            $('#menu-page').fadeOut(300);
        } else {
            $('#menu-page').fadeIn(300);
        }
    }

    function isMenu2(c = 'none') {
        if (document.getElementById('torTree')) {
            if ($("#torTree").attr('style') == 'display: none;') {
                $("#torTree").fadeIn(300);
                $("#torTree").css('display', 'inline-block');
            } else {
                $("#torTree").fadeOut(300);
            }
        } else {
            if (c != 'auto') {
                alert('人家是导航树哦！只有在特定的文章页面才会出现的。');
            }
        }
    }

    function isMenu3() {
        if (document.getElementById('search-box').style.display == 'block') {
            $('#search-box').fadeOut(300);
        } else {
            $('#search-box').fadeIn(300);
        }
    }

    function isComments() {
        if (document.getElementById('btn-comments').innerText == 'show comments') {
            document.getElementById('btn-comments').innerText = 'hide comments';
            document.getElementById('comments').style.display = 'block';
        } else {
            document.getElementById('btn-comments').innerText = 'show comments';
            document.getElementById('comments').style.display = 'none';
        }
        footerPosition();
    }

    function Search404() {
        $('#menu-1').fadeIn(150);
        $('#menu-2').fadeIn(150);
        $('#menu-3').fadeIn(150);
        $('#search-box').fadeIn(300);
    }

    function goBack() {
        window.history.back();
    }

    function footerPosition() {
        $("footer").removeClass("fixed-bottom");
        var contentHeight = document.body.scrollHeight,
            winHeight = window.innerHeight;
        if (document.getElementsByClassName("post-content")[0]) {
            var winImgNum = document.getElementsByClassName("post-content")[0].getElementsByTagName("img").length;
        } else {
            var winImgNum = 0;
        }
        if (!(contentHeight > winHeight) && winImgNum == 0) {
            $("footer").addClass("fixed-bottom");
        }
    }
    footerPosition();
    $(window).resize(footerPosition);

    function goToComment() {
        document.getElementById('btn-comments').innerText = 'hide comments';
        document.getElementById('comments').style.display = 'block';
        window.location.hash = "#postFun";
        footerPosition();
    }

    <?php if ($this->is('post')) : ?>
        <?php $postConfig = post_config($this); ?>
        <?php if ($postConfig['isTorTree']) : ?>
            isMenu2('auto');
        <?php endif; ?>

        var $navs = $('.torList'),
            $sections = $('.torAn'),
            $window = $(window),
            navLength = $navs.length - 1;

        $window.on('scroll', function() {
            var scrollTop = $window.scrollTop(),
                len = navLength;

            for (; len > -1; len--) {
                var that = $sections.eq(len);
                if (scrollTop >= (that.offset().top - 100)) {
                    $navs.removeClass('on').eq(len).addClass('on');
                    break;
                }
                $navs.removeClass('on');
            }
        });
    <?php endif; ?>
</script>

<?php $this->footer(); ?>
</body>

</html>
